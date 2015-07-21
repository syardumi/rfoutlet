<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);

$rfPath = '/var/www/rfoutlet/codesend ';
$switchPosition = str_replace('"', '', $_REQUEST['switch']);
$singleLocation = str_replace('"', '', $_REQUEST['single']);

switch ($singleLocation) {
	case "NightTable":
		if ($switchPosition == "On"){
			$rfCodes = array();
		}
		else if($switchPosition == "Off"){
			$rfCodes = array();
		}
	break;
	case "DresserLamp":
		if ($switchPosition == "On"){
            $rfCodes = array();
		}
		else if($switchPosition == "Off"){
			$rfCodes = array();
		}
	break;
	default:
	break;
}


foreach ($rfCodes as $rfCode) {
        shell_exec($rfPath . $rfCode);
        sleep(1);
}

echo json_encode(array('success' => true));
?>
