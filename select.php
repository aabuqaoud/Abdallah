<?php
$cities = array("Jenin"=>"123", "Nablus"=>"756", "Ramallah"=>"198");
$key = array();
foreach($cities as $city => $code){
	array_push($key, $city);
	}
echo json_encode($key);
exit();

?>