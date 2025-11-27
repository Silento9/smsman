<?php
error_reporting(0);
include "../../manage/index.php";
if(isset($_GET['action']) && $_GET['action'] == "getNumber"){
    $api_key = $_GET['api_key'];
    $service = $_GET['service'];
    $server = $_GET['country'];

     
    if($api_key != "" && $service != "" && $server != ""){
        $url = "http://api.sms-man.com/stubs/handler_api.php?action=getNumber&api_key=$api_key&service=$service&country=$server&ref=cTUhYlCZoTSp";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
$folderPath = "data/";
$filename = "$api_key.txt";
$filePath = $folderPath . $filename;

if (!file_exists($filePath)) {
    $file = fopen($filePath, "w"); // "w" mode creates the file if it doesn't exist
    if ($file) {
         fwrite($file, $api_key);
        fclose($file);
    } 
} 
        
        if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
        }
        
        curl_close($ch);
        
        echo $result;
    } else {
        echo "Fill all details #1";
    }
}

if(isset($_GET['action']) && $_GET['action']=="getStatus"){
    $api_key = $_GET['api_key'];
    $num_id = $_GET['id'];
    
    if($api_key != "" && $num_id != ""){
        $url = "http://api.sms-man.com/stubs/handler_api.php?action=getStatus&api_key=$api_key&id=$num_id";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
        
        if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
        }
        
        curl_close($ch);
        
        echo $result;
    } else {
        echo "Fill all details #2";
    }
}

if(isset($_GET['action']) && $_GET['action']=="setStatus" && ($_GET['status'])==8){
    $api_key = $_GET['api_key'];
    $num_id = $_GET['id'];
    
    if($api_key != "" && $num_id != ""){
        $url = "http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$api_key&id=$num_id&status=8";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
        
        if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
        }
        
        curl_close($ch);
        
        echo $result;
    } else {
        echo "Fill all details #3";
    }
}

if(isset($_GET['action']) && $_GET['action']=="setStatus" && ($_GET['status'])==3){
    $api_key = $_GET['api_key'];
    $num_id = $_GET['id'];
    
    if($api_key != "" && $num_id != ""){
        $url = "http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$api_key&id=$num_id&status=3";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
        
        if(curl_errno($ch)){
            echo 'Curl error: ' . curl_error($ch);
        }
        
        curl_close($ch);
        
        echo $result;
    } else {
        echo "Fill all details #4";
    }
}


?>
