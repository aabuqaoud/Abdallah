<?php
$cities = array("Jenin"=>"123", "Nablus"=>"756", "Ramallah"=>"198");
	//$data = json_encode($cities);
	$city = $_GET['city'];
	echo $cities[$city];
	exit();
	
?>