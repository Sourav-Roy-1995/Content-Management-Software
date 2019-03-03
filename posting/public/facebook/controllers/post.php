<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class post extends MX_Controller {
	public $tb_account;
	public $module;
	public $tb_posts;

	public function __construct(){
		parent::__construct();

		$this->tb_account = FACEBOOK_ACCOUNTS;
		$this->tb_posts = FACEBOOK_POSTS;
		$this->module = get_class($this);
		$this->load->model(get_class($this).'_model', 'model');
	}

	public function index($ids = ""){
		$post = array();
		if($ids != ""){
			$post = $this->model->get("*", $this->tb_posts, "ids = '{$ids}' AND uid = '".session("uid")."'");
			if(empty($post)){
				redirect(PATH."facebook/post");
			}
		}

		$data = array(
			'accounts' => $this->model->fetch("id, fullname, avatar, ids, type", $this->tb_account, "uid = '".session("uid")."' AND status = 1 AND official != 3"),
			'post' => $post
		);
		$this->template->build('post/index', $data);
	}

	public function preview(){
		$data = array();
		$this->load->view('post/preview', $data);
	}

	public function block_report(){
		$data = array();
		$this->load->view('post/block_report', $data);
	}

	public function block_general_settings(){
		$data = array();
		$this->load->view('post/general_settings', $data);
	}

	public function ajax_get_link(){
		$link = post("link");
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$link)) {
			return ms(array(
				"status" => "error",
				"message" => lang("invalid_url")
			));
		}

		$parse = parse_url($link);
		$data = get_info_link($link);
		$data['host'] = str_replace("www.", "", $parse['host']);
		$data['status'] = "success";
		ms($data);
	}

	public function ajax_post(){
		$ids = post("ids");
		$accounts = $this->input->post("account");
		$type = post("type");
		$caption = post("caption");
		$link = post("link");
		$media = $this->input->post("media");
		$time_post = post("time_post");
		$delay = post("delay");
		$type = post("type");
		$repeat = (int)post("repeat_every");
		$repeat_end = post("repeat_end"); 
		$post = array();

		if($ids){
			$post = $this->model->get("*", $this->tb_posts, "ids = '{$ids}' AND uid = '".session("uid")."'");
			if(empty($post)){
				ms(array(
		        	"status"  => "error",
		        	"stop"    => true,
		        	"message" => lang('This post does not exist')
		        ));
			}
		}

		if(!$accounts){
			ms(array(
	        	"status"  => "error",
	        	"stop"    => true,
	        	"message" => lang('please_select_an_account')
	        ));
		}

		switch ($type) {
			case 'text':
				if($caption == ""){
					ms(array(
			        	"status"  => "error",
			        	"stop"    => true,
			        	"message" => lang('caption_is_required')
			        ));
				}
				break;

			case 'link':
				if($link == ""){
					ms(array(
			        	"status"  => "error",
			        	"stop"    => true,
			        	"message" => lang('link_is_required')
			        ));
				}
				break;

			case 'media':
				if(!$media && empty($media)){
					ms(array(
			        	"status"  => "error",
			        	"stop"    => true,
			        	"message" => lang('please_select_a_media')
			        ));
				}
				break;
			
			default:
				ms(array(
		        	"status"  => "error",
		        	"stop"    => true,
		        	"message" => lang('please_select_a_post_type')
		        ));
				break;
		}

		if(!post("is_schedule")){

			$fb_account = $this->model->get("*", $this->tb_account, "ids = '".$accounts[0]."' AND uid = '".session("uid")."' AND status = 1");

			if(!empty($fb_account)){
				$data = array(
					"ids" => ids(),
					"uid" => session("uid"),
					"account" => $fb_account->id,
					"group" => $fb_account->pid,
					"category" => $fb_account->type,
					"type" => $type,
					"data" => json_encode(array(
								"media"      => $media,
								"caption"    => $caption,
								"link"       => $link
							)),
					"time_post" => NOW,
					"delay" => 0,
					"time_delete" => 0,
					"changed" => NOW,
					"created" => NOW 
				);

				$fb   = new FacebookAPI();
				$fb->set_access_token($fb_account->access_token);
				$result = $fb->create_post($type, $data, $fb_account->pid, $fb_account->type);

				if(is_string($result)){
					$data['status'] = 3;
					$data['result'] = json_encode(array("message" => $result));

					//
					update_setting("fb_post_error_count", get_setting("fb_post_error_count", 0) + 1);
					update_setting("fb_post_count", get_setting("fb_post_count", 0) + 1);
					
					//Save report
					$this->db->insert($this->tb_posts, $data);

					ms(array(
			        	"status"  => "error",
			        	"message"    => $result
			        ));
				}else{

					//Save report
					update_setting("fb_post_success_count", get_setting("fb_post_success_count", 0) + 1);
					update_setting("fb_post_count", get_setting("fb_post_count", 0) + 1);
					update_setting("fb_post_{$type}_count", get_setting("fb_post_{$type}_count", 0) + 1);

					$data['status'] = 2;
					$data['result'] = json_encode(array("message" => "successfully", "id" => $result->id, "url" => "http://fb.com/".$result->id));
					$this->db->insert($this->tb_posts, $data);

					ms(array(
			        	"status"  => "success",
			        	"message"  => lang("post_successfully")
			        ));
				}
			}else{
				ms(array(
		        	"status"  => "error",
		        	"message"  => lang("facebook_account_does_not_exist")
		        ));
				
			}
		}else{
			if(!empty($accounts)){
				foreach ($accounts as $key => $id) {
					$fb_account = $this->model->get("*", $this->tb_account, "ids = '".$id."' AND uid = '".session("uid")."' AND status = 1");
					$time_post_save = get_to_time($time_post) + $delay*$key;

					if(!empty($fb_account)){
						$data = array(
							"uid" => session("uid"),
							"account" => $fb_account->id,
							"group" => $fb_account->pid,
							"category" => $fb_account->type,
							"type" => $type,
							"data" => json_encode(array(
										"media"      => $media,
										"caption"    => $caption,
										"link"       => $link,
										"repeat"     => $repeat*86400, 
										"repeat_end" => get_timezone_system($repeat_end)
									)),
							"time_post" => get_timezone_system($time_post_save),
							"delay" => $delay,
							"time_delete" => 0,
							"status" => 1,
							"changed" => NOW
						);

						if(empty($post)){
							$data["ids"] = ids();
							$data["created"] = NOW;
							$this->db->insert($this->tb_posts, $data);
						}else{
							$this->db->update($this->tb_posts, $data, array("id" => $post->id));

							ms(array(
					        	"status"  => "success",
					        	"message" => lang('Edit post successfully')
					        ));
						}
					}
				}
			}

			ms(array(
	        	"status"  => "success",
	        	"message" => lang('add_schedule_successfully')
	        ));
		}
	}

                                        
                                    
	/****************************************/
	/* CRON                                 */
	/* Time cron: once_per_minute           */
	/****************************************/
	public function cron(){
		$schedule_list = $this->db->select('post.*, account.access_token')
		->from($this->tb_posts." as post")
		->join($this->tb_account." as account", "post.account = account.id")
		->where("(post.status = 1 OR post.status = 4) AND post.time_post <= '".NOW."' AND account.status = 1")->limit(1,0)->order_by('post.time_post', 'ASC')->get()->result();

		if(!empty($schedule_list)){
			foreach ($schedule_list as $key => $schedule) {
				if(!permission("facebook/post", $schedule->uid)){
					$this->db->delete($this->tb_posts, array("uid" => $schedule->uid, "time_post >=" => NOW));
				}
				
				$fb   = new FacebookAPI();
				$fb->set_access_token($schedule->access_token);
				$result = $fb->create_post($schedule->type, $schedule, $schedule->group, $schedule->category);

				if(is_string($result)){
					//Save report
					update_setting("fb_post_error_count", get_setting("fb_post_error_count", 0, $schedule->uid) + 1, $schedule->uid);
					update_setting("fb_post_count", get_setting("fb_post_count", 0, $schedule->uid) + 1, $schedule->uid);
					
					$data['status'] = 3;
					$data['result'] = json_encode(array("message" => $result));
					$this->db->update($this->tb_posts, $data, "id = '{$schedule->id}'");

					echo $result."<br/>";
				}else{
					$schedule_data = $schedule->data;
					if( isset($schedule_data->repeat) 
						&& isset($schedule_data->repeat_end) 
						&& $schedule_data->repeat > 0 
						&& strtotime(NOW) < strtotime($schedule_data->repeat_end)
					){
						$time_post_next = date("Y-m-d H:i:s", get_to_time($schedule->time_post) + $schedule_data->repeat);
						$data['status'] = 1;
						$data['time_post'] = $time_post_next;
					}else{
						$data['status'] = 2;
					}

					//Save report
					update_setting("fb_post_success_count", get_setting("fb_post_success_count", 0, $schedule->uid) + 1, $schedule->uid);
					update_setting("fb_post_count", get_setting("fb_post_count", 0, $schedule->uid) + 1, $schedule->uid);
					update_setting("fb_post_{$schedule->type}_count", get_setting("fb_post_{$schedule->type}_count", 0, $schedule->uid) + 1, $schedule->uid);

					$data['result'] = json_encode(array("message" => "successfully", "id" => $result->id, "url" => "http://fb.com/".$result->id));
					$this->db->update($this->tb_posts, $data, "id = '{$schedule->id}'");

					echo '<a target=\'_blank\' href=\'http://fb.com/'.$result->id.'\'>'.lang('post_successfully').'</a><br/>';
				}
			}
		}else{
			
		}

	}
	//****************************************/
	//               END CRON                */
	//****************************************/


	/****************************************/
	/*           SCHEDULES POST             */
	/****************************************/
	public function block_schedules_xml($type = ""){
		$template = array(
			"controller" => "facebook",
			"color" => "#4267b2",
			"name"  => lang("auto_post"),
			"icon"  => "fa fa-facebook-square"
		);
		echo Modules::run("schedules/block_schedules_xml", $template, $this->tb_posts, $type);
	}

	public function schedules(){
		echo Modules::run("schedules/schedules", "fullname", $this->tb_posts, $this->tb_account);
	}

	public function ajax_schedules(){
		echo Modules::run("schedules/ajax_schedules", "fullname", $this->tb_posts, $this->tb_account);
	}

	public function ajax_delete_schedules($delete_all = false, $type = ""){
		echo Modules::run("schedules/ajax_delete_schedules", $this->tb_posts, $delete_all, $type);
	}
	//****************************************/
	//         END SCHEDULES POST            */
	//****************************************/
}