<?php
$rfPath = '/var/www/rfoutlet/codesend ';
$outletLight = $_POST['outletId'];
$outletStatus = $_POST['outletStatus'];

if ($outletLight == "1" && $outletStatus == "on") {
    $rfCodes = array(87489);
} else if ($outletLight == "1" && $outletStatus == "off") {
    $rfCodes = array(87489);
} else if ($outletLight == "2" && $outletStatus == "on") {
    $rfCodes = array(87345);
} else if ($outletLight == "2" && $outletStatus == "off") {
    $rfCodes = array(87345);
} else if ($outletLight == "3" && $outletStatus == "on") {
    $rfCodes = array(87309);
} else if ($outletLight == "3" && $outletStatus == "off") {
    $rfCodes = array(87309);
} else if ($outletLight == "4" && $outletStatus == "on") {
    $rfCodes = array(5330227);
} else if ($outletLight == "4" && $outletStatus == "off") {
    $rfCodes = array(5330236);
} else if ($outletLight == "5" && $outletStatus == "on") {
    $rfCodes = array(5330371);
} else if ($outletLight == "5" && $outletStatus == "off") {
    $rfCodes = array(5330380);
} else if ($outletLight == "6" && $outletStatus == "on") {
    $rfCodes = array(5330691);
} else if ($outletLight == "6" && $outletStatus == "off") {
    $rfCodes = array(5330700);
}  else if ($outletLight == "7" && $outletStatus == "on") {
    $rfCodes = array(5332227);
} else if ($outletLight == "7" && $outletStatus == "off") {
        $rfCodes = array(5332236);
} else if ($outletLight == "8" && $outletStatus == "on") {
    $rfCodes = array(5338371);
} else if ($outletLight == "8" && $outletStatus == "off") {
        $rfCodes = array(5338380);
}


foreach ($rfCodes as $rfCode) {
        shell_exec($rfPath . $rfCode);
        sleep(1);
}

echo json_encode(array('success' => true));
?>
