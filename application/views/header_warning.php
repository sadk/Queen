<?php
if (isset($lastsuccess) && !empty($lastsuccess) ) {
?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> <?php echo $value; ?>.
  </div>        
<?php	
}
elseif (isset($lasterror)&& !empty($lasterror) ) {
?>
  <div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error!</strong> <?php echo $value; ?>.
  </div>        
<?php	
} 
elseif (isset($lastwarning)&& !empty($lastwarning)) {
?>
  <div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> <?php echo $value; ?>.
  </div>        
<?php		
}

?>
