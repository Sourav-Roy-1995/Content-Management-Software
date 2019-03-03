<?php
$ids = "";
$type = "";
$caption = "";
$link = "";
$repeat = 0;
$repeat_end = "";
$time_post = "";
$account = 0;
$media = array();
if(!empty($post)){
    $data = json_decode($post->data);
    $ids = $post->ids;
    $type = $post->type; 
    $account = $post->account;
    $caption = @$data->caption;
    $media = @$data->media;
    $link = @$data->link;
    $repeat = @$data->repeat;
    $repeat_end = get_timezone_user(@$data->repeat_end);
    $time_post = get_timezone_user($post->time_post);
    $time_post = date("d/m/Y h:i", strtotime($time_post));
}
?>

<div class="wrap-content container facebook-app">
    <div class="row">
        <form action="<?=PATH?>facebook/post/ajax_post" method="POST" class="actionForm">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i> <?=lang('facebook_accounts')?>
                        </div>
                    </div>
                    <div class="card-block p0">
                        <div class="list-account max scrollbar scrollbar-dynamic">
                            <?php if(!empty($accounts)){
                                foreach ($accounts as $key => $row) {
                                    switch ($row->type) {
                                        case 'page':
                                            $icon = "fa-flag";
                                            break;

                                        case 'group':
                                            $icon = "fa-users";
                                            break;
                                        
                                        default:
                                            $icon = "fa-user";
                                            break;
                                    }
                            ?>

                            <a href="javascript:void(0);" class="item <?=$row->id == $account?"active":""?>">
                                <div class="image-box">
                                    <img class="img-circle" src="<?=$row->avatar?>">
                                    <i class="icon fa <?=$icon?>"></i>
                                </div>
                                <div class="checked"><i class="ft-check"></i></div>
                                <input type="checkbox" name="account[]" value="<?=$row->ids?>" class="hide" <?=$row->id == $account?"checked":""?>>
                                <div class="content">
                                    <span class="title"><?=$row->fullname?></span>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <?php }}else{?>
                            <div class="empty">
                                <span><?=lang("add_an_account_to_begin")?></span>
                                <a href="<?=PATH?>account_manager" class="btn btn-primary"><?=lang("add_account")?></a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <input type="hidden" class="form-control" name="list_ids" value="">
                <div class="card">
                    <?=modules::run("caption/popup")?>

                    <div class="card-overplay" style="display: none;"><i class="pe-7s-config pe-spin"></i></div>
                    <div class="card-header">
                        <div class="card-title">
                            <i class="fa ft-edit" aria-hidden="true"></i> <?=lang('new_post')?> 
                        </div>
                    </div>
                    <div class="card-block pt0">
                        <div class="row">
                            <div class="tab-type schedule-facebook-type file-manager-change-type">
                                <a href="#media" class="col-xs-4 col-sm-4 col-md-4 item active" data-toggle="tab" data-type="media" data-type-image="multi">
                                    <i class="ft-camera"></i> <?=lang('media')?>
                                    <input type="radio" name="type" class="hide" value="media" checked="">
                                </a>
                                <a href="#link" class="col-xs-4 col-sm-4 col-md-4 item" data-toggle="tab" data-type="link">
                                    <i class="ft-link"></i> <?=lang('link')?>
                                    <input type="radio" name="type" class="hide" value="link">
                                </a>
                                <a href="#text" class="col-xs-4 col-sm-4 col-md-4 item" data-toggle="tab" data-type="text">
                                    <i class="ft-file"></i> <?=lang('text')?>
                                    <input type="radio" name="type" class="hide" value="text">
                                </a>
                            </div>
                        </div> 
                        
                        <?=modules::run("file_manager/block_file_manager", "multi", $media)?>

                        <div class="form-group form-caption facebook-text">
                            <div class="list-icon">
                                <a href="javascript:void(0);" class="getCaption" data-toggle="tooltip" data-placement="left" title="<?=lang("get_caption")?>"><i class="ft-command"></i></a>
                                <a href="javascript:void(0);" data-toggle="tooltip" class="saveCaption" data-placement="left" title="<?=lang("save_caption")?>"><i class="ft-save"></i></a>
                            </div>
                            <textarea class="form-control post-message" name="caption" rows="3" placeholder="<?=lang('add_a_caption')?>" style="height: 114px;"><?=$caption?></textarea>
                        </div>

                        <div class="tab-content b0">
                            <div id="link" class="tab-pane fade in">
                                <div class="form-group form-help">
                                    <input type="input" class="form-control" name="link" placeholder=" <?=lang('enter_link')?>" value="<?=$link?>">
                                </div>
                            </div>
                        </div>

                        <?php if($ids == ""){?>
                        <div class="form-group">
                            <div class="pure-checkbox grey mr15">
                                <input type="checkbox" id="md_checkbox_schedule" name="is_schedule" class="filled-in chk-col-red enable_facebook_schedule" value="on">
                                <label class="p0 m0" for="md_checkbox_schedule">&nbsp;</label>
                                <span class="checkbox-text-right"> <?=lang('schedule')?></span>
                            </div>
                        </div>
                        <?php }else{?>
                        <input type="hidden" name="is_schedule" value="1">
                        <input type="hidden" name="default_type" value="<?=$type?>">
                        <input type="hidden" name="ids" value="<?=$ids?>">
                        <?php }?>

                        <div class="postnow-option <?=$ids!=""?"hide":""?>" id="postnow-option">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> <?=lang('post_interval_seconds')?></label>
                                        <select name="postnow_delay" class="form-control">
                                            <?php for ($i=1; $i < 1000; $i++) {
                                            if($i%10 == 0){
                                            ?>
                                                <option value="<?=$i?>"><?=$i?></option>
                                            <?php }}?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="schedule-option <?=$ids==""?"hide":""?>" id="schedule-option">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time_post"> <?=lang('time_post')?></label>
                                        <input type="text" name="time_post" class="form-control datetime" id="time_post" value="<?=$time_post?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> <?=lang('Post interval')?></label>
                                        <select name="delay" class="form-control">
                                            <optgroup label="Minutes">
                                                <?php for ($i=1; $i <= 60; $i++) {
                                                ?>
                                                    <option value="<?=$i*60?>"><?=$i?> <?=lang('minutes')?></option>
                                                <?php }?>
                                            </optgroup>
                                            <optgroup label="Hours">
                                                <?php for ($i=1; $i <= 60; $i++) {
                                                ?>
                                                    <option value="<?=$i*60*60?>"><?=$i?> <?=lang('hours')?></option>
                                                <?php }?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> <?=lang('auto_pause_after')?></label>
                                        <select name="pause" class="form-control">
                                            <?php for ($i=1; $i <= 60; $i++) {
                                            ?>
                                                <option value="<?=$i*60?>"><?=$i?> <?=lang("posts")?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> <?=lang('auto_resume_after')?></label>
                                        <select name="delay" class="form-control">
                                            <optgroup label="Minutes">
                                                <?php for ($i=1; $i <= 60; $i++) {
                                                ?>
                                                    <option value="<?=$i*60?>"><?=$i?> <?=lang('minutes')?></option>
                                                <?php }?>
                                            </optgroup>
                                            <optgroup label="Hours">
                                                <?php for ($i=1; $i <= 60; $i++) {
                                                ?>
                                                    <option value="<?=$i*60*60?>"><?=$i?> <?=lang('hours')?></option>
                                                <?php }?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> <?=lang('Repeat frequency')?></label>
                                        <select name="repeat_every" id="repeat_every" class="form-control">
                                            <option value="0"> <?=lang('once')?></option>
                                            <option value="1" <?=$repeat==1?"selected":""?>> <?=lang('every_day')?> </option>
                                            <?php for ($i=2; $i <=60 ; $i++) { 
                                            ?>
                                            <option value="<?=$i?>" <?=$repeat==$i?"selected":""?>><?=sprintf(lang('every_x_days'),$i)?></option>
                                            <?php  }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> <?=lang('end_on')?></label>
                                        <input type="text" name="repeat_end" class="form-control datetime" id="repeat_end">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <?php if($ids == ""){?>
                        <button type="button" class="btn btn-primary pull-right btnPostNow"> <?=lang('post_now')?></button>
                        <button type="submit" class="btn btn-primary pull-right btnSchedulePost hide"> <?=lang('schedule_post')?></button>
                        <?php }else{?>
                        <a href="<?=PATH?>facebook/post/ajax_post" data-redirect="<?=PATH?>facebook/post" class="btn btn-primary pull-right actionMultiItem"> <?=lang('Edit post')?></a>
                        <?php }?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </form>
        <?=Modules::run("facebook/post/preview")?>
    </div>
</div>