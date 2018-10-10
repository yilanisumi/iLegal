<div class="field">
	<label><?php echo $field['field_name'] ?></label>
	<textarea rows="1" class="fluid"></textarea>
	<input type="hidden" name="ans">
</div>
<?php
	do{
		$field2 = $form->fetch_assoc();
	}while($field2["field_name"] == $field["field_name"]);
	$field = $field2;
?>