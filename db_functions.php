<?php
class DB_Functions {

    private $db;

    
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }

    /**
     * Storing new user
     * returns user details
     */
    public function storeUser($userObj) {
        // insert user into database

        $gcm_id = $userObj->getGcmId();
        $device_id = $userObj->getDeviceId();
        $created_at = $userObj->getCreatedAt();
        $result = mysql_query("INSERT INTO gcm_users(gcm_id, device_id, created_at) VALUES('$gcm_id','$device_id','$created_at')") or die(mysql_error());
        // check for successful store
        if ($result) {
            // get user details
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM gcm_users WHERE id = $id") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Getting all users
     */
    public function getAllUsers() {
        $result = mysql_query("select * FROM gcm_users");
        return $result;
    }
}
?>
