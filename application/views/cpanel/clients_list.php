<hr>
<?php $this->load->view('header_warning'); ?>
<?php
if (isset($lasterror) && !empty($lasterror) ) { exit;}
?>
<table class="table table-hover">
<thead>
<tr>
	<td>
		<input type="checkbox" onclick="chkAll()" name="chkAll"/>
	</td>
	<th>
		<?php echo $this->lang->line('panel'); ?>
		<?php
		if (isset($filter) && !empty($filter) ) {
			echo '&nbsp;-&nbsp; '.$this->lang->line('filter');
		}elseif (isset($filter_addition) && !empty($filter_addition)){
			echo '&nbsp;-&nbsp; '.$this->lang->line('after_filter');
		}
		?>
	</th>
	<td>
	</td>
	<td>
		&nbsp;&nbsp;<a href="javascript:multi_clients_list_load(1)"><i class="icon-refresh" title="refresh"></i></a>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
</thead>
<?php
if ( isset($list_machine) &&  empty($list_machine)) {
foreach ($list_machine as $key => $value) {
?>

	<tr>
		<td>
			<input type="checkbox" onclick="javascript:mycheckbox()" name="opMachine" value ="<?php $value['mid']; ?><?php $value['uniqu']; ?>" />
		</td>
		<td>
			<a onclick="location.href='#top'" href="javascript:multi_show_panel('<?php $value['cid']; ?>')">	
		<?php $value['machine_name']; ?>
			</font></a>
		</td>
		<td>
			<a href="#multi_panel_top" onclick="javascript:client_panel(<?php $value['cid']; ?>);"><i class="icon-list-alt" title="<?php echo $this->lang->line('DronePanel'); ?>"></i></a>
		</td>
		<td>
			<div class="btn-group pull-right">
				<?php
				if (  $shortcuts_array[$value['mid']] ) {
?>
					<a class="btn btn-mini btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
<?php
					if ($token_shortcuts_array[$value['mid']]) {
						foreach ($token_shortcuts_array[$value['mid']]  as $shortcuts_key => $shortcuts_value) {
?>
						<li><a onclick="location.href='#top'" href="javascript:multi_exec_shortcut('<?php $shortcuts_value['sid']; ?>','<?php $value['cid']; ?>','<?php $shortcuts_value['module']; ?>')">		  
						<i class="icon-plane"></i>&nbsp;<?php $shortcuts_value['name']; ?></a></li>
<?php
						}
						echo '<li class="divider"></li>';
					} 
					foreach ($shortcuts_array[$value['mid']]  as $shortcuts_key => $shortcuts_value) {
?>
						<li><a onclick="location.href='#top'" href="javascript:multi_exec_shortcut('<?php $shortcuts_value['sid']; ?>','<?php $value['cid']; ?>','<?php $shortcuts_value['module']; ?>')">		  
						<i class="icon-plane"></i>&nbsp;<?php $shortcuts_value['name']; ?></a></li>
<?php
					}
					echo '</ul>';
				} else {
?>
					<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>&nbsp;-&nbsp;<?php echo $this->lang->line('no_shortcuts'); ?></li>
					</ul>
<?php					
				}
				
				?>
			</div>
		</td>
		<td>
			<?php 
				foreach ($value['token'] as $token_key => $token_value) {
				echo '<span class="label label-info">'.$token_value.'</span>';
				}
			?>
		</td>
	</tr>
<?php
	}
?>
<?php 
}else{
?>
<tr>
	<td>
		&nbsp;
	</td>
	<td>
		<?php echo $this->lang->line('list_is_empty'); ?>
	</td>
	<td>
		&nbsp;
	</td>
</tr>
<?php
}
?>
</table>
<script>
$(function(){
    $('#chkAll').live('click',function(ev){
         $('INPUT[name=opMachine]').attr('checked',$('#chkAll').prop('checked'));
    });
    $('INPUT[name=opMachine]').click(function(ev){
        $('#chkAll').attr('checked',
            $('INPUT[name=opMachine]:checked').length == $('INPUT[name=opMachine]').length);
    });
});
</script>