<?php $this -> load -> view('header'); ?>
<?php $this -> load -> view('header_warning'); ?>
<div id="header_warning"></div>
<a name="top"></a>
<div class="row" id="multiPanel">
    <div id="group_effects" class="span3" style="display:none;"></div>
	<!--{if (!$disToolkit)}-->
    <div align="center"  id="multi_toolkit" class="span12">
	<div class="btn-toolbar" style="margin:0;">
	<div class="btn-group">
	  <button class="btn" id="switcher_clist" OnClick="javascript:toolkit_switcher('switcher_clist',0);"><i class="icon-th-list"></i></button>
	  <button class="btn" id="switcher_glist" OnClick="javascript:toolkit_switcher('switcher_glist',0);"><i class="icon-th"></i></button>	  
    </div>  
	<div class="btn-group">
	  <button class="btn" id="switcher_show" OnClick="javascript:toolkit_switcher('switcher_show',0);"><i class="icon-eye-close"></i></button>
	  <button class="btn" id="switcher_ban"  OnClick="javascript:toolkit_switcher('switcher_ban',0);"><i class="icon-pause"></i></button>
	  <button class="btn" id="switcher_resp" OnClick="javascript:toolkit_switcher('switcher_resp',0);"><i class="icon-bell"></i></button>
	</div>
	</div>
	</div>
	<!--{/if}-->
	<div class="span5 offset1" id="multi_clients_list" style="display:none;"></div>
    <a name="multi_panel_top"></a>
	<input type="hidden" id="TOP_MOD" value="">
    <div class="span5 offset1" id="multi_panel" style="display:none;"></div>   
    <div class="span5 offset1" id="multi_app_panel"></div>	
	<div id="multi_app_container"></div>
</div>
	
<script src="<?php echo base_url();?>asserts/js/hyp_cpanel.js"></script>
<script src="<?php echo base_url();?>asserts/js/hyp_request.js"></script> 
<script src="<?php echo base_url();?>asserts/js/hyp_multi_panel.js"></script>
<!--{if !(($lastsuccess) or ($lasterror))}-->
<script>
   window.onload=function(){toolkit_switcher('switcher_clist',1);toolkit_switcher('switcher_ban',1);}
</script>
<!--{/if}-->
<?php $this -> load -> view('footer'); ?>
