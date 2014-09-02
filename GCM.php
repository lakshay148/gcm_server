<?php
/**
 * Description of GCM
 *
 */
class GCM {

    //put your code here
    // constructor
    function __construct() {
        
    }

    /**
     * Sending Push Notification
     */
    public function send_notification($registatoin_ids, $message) {
        // include config
        //include_once './config.php';

        // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';

        $fields = array(
            'registration_ids' => $registatoin_ids,
            'data' => $message
        );
	    //print_r($registatoin_ids);

        $headers = array(
    //        'Authorization: key=' . "AIzaSyAbaGub5Zjxq4bFVr5scv47gMokX-1_Gy4",
	'Authorization: key=' . "AIzaSyC7RBxBwczC-UzbSNl2VZuDHfS8QR_rXlg",
            'Content-Type: application/json'
        );

//	$headers = array(
  //          'Authorization: key=' . "AIzaSyBDA2jbHl405XorrpdjmlK-EoY1OUEW3D0",
    //        'Content-Type: application/json'
      //  );
        // Open connection
        $ch = curl_init();
	
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);
        echo $result;
    }
}

?>
