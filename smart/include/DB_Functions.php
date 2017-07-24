<?php

class DB_Functions {

    private $db;

    //put your code here
    // constructor
	
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
        
		
    }

    // destructor
    function __destruct() {
        
    }

	

	
	    public function AddTemp($data,$temp,$hum,$value) {
        $result = mysql_query("INSERT INTO smarttemp(data,temp,hum,value,date) VALUES( '$data','$temp','$hum','$value', NOW())");
        // check for successful store
        if ($result) {
			
            // get user details 
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM smarttemp WHERE id = $id");
            // return user details
            return mysql_fetch_array($result);
        } else {
            return false;
        }
    }
	


	
	




	


	
public function GetTemp() {
$result = mysql_query("SELECT * FROM `smarttemp` WHERE (date BETWEEN DATE_ADD(DATE(NOW()), INTERVAL -1 DAY) AND NOW());");

$KM =array();
while ($row = mysql_fetch_assoc($result)) {
	$KM[] =$row;
}

return $KM;
}



}

?>
