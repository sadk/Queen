<hr>
<?php $this->load->view('header_warning'); ?>
<?php
if ( isset($lasterror) && empty($lasterror) ) { 
?>
     <table class="table">
	  <thead><tr><td>&nbsp;</td><th><?php echo $this->lang->line('group'); ?></th><td>&nbsp;&nbsp;<a href="javascript:group_list_load()"><i class="icon-refresh" title="refresh"></i></a></td></tr></thead>
<?php
	if ( isset($group_list) ) {
			foreach ($group_list as $key => $value) {
?>
			    <tr><td><i class="icon-trash" title="<?php echo $this->lang->line('dissolve_group'); ?>"></i></td><td><?php echo $value['name']; ?></td><td><?php echo $$value['online']; ?></td></tr> 
				<tr><td></td><td><input type="text" value="" name="new_group" placeholder="<?php echo $this->lang->line('new_group_name'); ?>></td><td><button class="btn btn-primary"><?php echo $this->lang->line('create_group'); ?></button></td></tr>    
		     </table>
<?php		
			}		
	}
}
?>
