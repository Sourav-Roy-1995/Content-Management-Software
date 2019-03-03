<div class="monthly" style="display: none;" id="mycalendar"></div>
<script type="text/javascript">
	$(function(){
		$('#mycalendar').monthly({
			mode: 'event',
  			xmlUrl: '<?=PATH?>schedules/xml/<?=$type?>/<?=!empty($socials)?strtolower(implode(".", $socials)):""?>',
		});
		
		setTimeout(function(){
			$(".monthly").fadeIn();
		}, 200);
	});
</script>