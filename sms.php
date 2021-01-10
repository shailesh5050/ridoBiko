<?php

include "./includes/connection.php";
date_default_timezone_set('Asia/Kolkata');
$query= "SELECT `Dr.exp`,`mobile` FROM `userdetails`";
$run=mysqli_query($conn,$query);
$todayDate = date('Y-m-d');

while($data= mysqli_fetch_assoc($run)){
    if($todayDate==$data['Dr.exp']){
        //Message Api
        // Account details
$apiKey = urlencode('Mqhg3lTfepc-UddtSfQZoQRSlN6Bg2R2SmSGFeAkyD');
// Message details
$numbers = array($data['mobile']);
$sender = urlencode('TXTLCL');
$message = rawurlencode("Dear Customer Your Driving License is Gonna Be Expire Today..");
 
$numbers = implode(',',$numbers);
 
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, 'sender' => $sender, 'message' => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
//Message Api End
    }
}

?>