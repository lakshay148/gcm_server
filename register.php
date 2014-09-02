<?php

// response json
$json = array();

include_once './db_functions.php';
include_once './GCM.php';
include_once './models/gcm_user.class.php';

/**
 * Registering a user device
 * Store reg id in users table
 */

if (isset($_REQUEST["registrationId"])) {
    	
    echo $gcm_regid = $_REQUEST["registrationId"]; // GCM Registration ID
	$name = $_REQUEST['name'];
	$deviceId = $_REQUEST["device_id"];

    $createdAt= date("Y-m-d H:i:s",time());
    $gcmUser = new gcm_user($gcm_regid,$name,$device_id,$createdAt);

    $db = new DB_Functions();
    $gcm = new GCM();

    $res = $db->storeUser($gcmUser);
} else {
    // user details missing
    echo "Registration Id is mandatory !!!";
}
?>
