<?php 
	/***************************
	  Sample using a PHP array
	****************************/

	require('../../assets/fpdm/fpdm.php');

	$pdf = new FPDM('../../assets/pdf/form2.pdf', '../../assets/pdf/data.fdf', false);
	$pdf->Merge();
	$pdf->Output();
?>