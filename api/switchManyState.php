<?php

ini_set('display_errors',1);  
error_reporting(E_ALL);

$rfPath = '/var/www/rfoutlet/codesend ';
$switchPosition = str_replace('"', '', $_REQUEST['switch']);
$groupLocation = str_replace('"', '', $_REQUEST['group']);

switch ($groupLocation) {
	case "LivingRoom":
		if ($switchPosition == "On"){
			$rfCodes = array(5330227, 5330371, 5330691);
		}
		else if($switchPosition == "Off"){
			$rfCodes = array(5330236, 5330380, 5330700);
		}
	break;
	case "Office":
		if ($switchPosition == "On"){
                	$rfCodes = array(87489, 87345, 87309);
		}
                else if($switchPosition == "Off"){
                	$rfCodes = array(87489, 87345, 87309);
		}
	break;
	case "Bedroom":
		if ($switchPosition == "On"){
                	$rfCodes = array(5332227, 5338371);
		}
                else if($switchPosition == "Off"){
                	$rfCodes = array(5332236, 5338380);
		}
	break;
	default:
	break;
}

foreach ($rfCodes as $rfCode) {
        echo shell_exec($rfPath . $rfCode);
        sleep(1);
}

echo json_encode(array('success' => true));
?>
