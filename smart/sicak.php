<?php


if (isset($_POST['tag']) && $_POST['tag'] != '') {
    // get tag
    $tag = $_POST['tag'];

    // include db handler
    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();
  $response = array("tag" => $tag, "error" => FALSE);
	
	if ($tag == 'temp') {
		$temp = $db->GetTemp();
		
		            if ($temp) {
               $response["error"] = FALSE;
		
			   for ($i = 0; $i < count($temp); $i++) {
				$response["cValue"][$i]["data"] = $temp[$i]["data"];
				$response["cValue"][$i]["temp"] = $temp[$i]["temp"];
				$response["cValue"][$i]["hum"] = $temp[$i]["hum"];
				$response["cValue"][$i]["value"] = $temp[$i]["value"];
                $response["cValue"][$i]["date"] = $temp[$i]["date"]; 
			   }
			  }
		


			 
                echo json_encode($response);
	
	}
	
	
	
		if ($tag == 'addtemp') {
			
	   $temp =  $_POST['temp'];
		$ttemp = $db->AddTemp(0,$temp);
		     
              $response["error"] = FALSE;
			 
                echo json_encode($response);
	
	}
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameter 'tag' is missing!";
    echo json_encode($response);
}

?>
