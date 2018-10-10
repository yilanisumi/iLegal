<?php 
	$field2 = $form->fetch_assoc();
	$i++;
	if($field2["field_name"] != $field["field_name"]){
		include("single_checkbox_field.php");
	}else{
		include("radio_field_start.php");
	  while($field2["field_name"] == $field["field_name"]){
	  	include("radio_option.php");
	  	$field2 = $form->fetch_assoc();
	  }
	  echo "</div>";
	}
	$field = $field2;
?>