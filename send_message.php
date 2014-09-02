<?php


if (isset($_REQUEST["regId"]) && isset($_REQUEST["message"])) {
    $regId = $_REQUEST["regId"];
    $message = $_REQUEST["message"];
    
    include_once './GCM.php';
    
    $gcm = new GCM();

    $registatoin_ids = array($regId);
	$message = array("MESSAGE" => $message,"LANDING_SCREEN"=>2,"PROFILE_CHECKSUM"=>"adsfdsf","PHOTO_URL"=>"D");
    $result = $gcm->send_notification($registatoin_ids, $message);

    echo $result;
}
else
{
	echo "Please enter the registration Id and message you want to send !!!";
}
?>
