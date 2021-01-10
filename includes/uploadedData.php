<?php 
include "connection.php";

//Adhar Front 
$adharFrontName= $_FILES['adharFront']['name'];
$adharFrontType= $_FILES['adharFront']['type'];
$adharFrontSize= $_FILES['adharFront']['size'];
$adharFrontTmpName= $_FILES['adharFront']['tmp_name'];
//  if(pathinfo($adharFrontName,PATHINFO_EXTENSION)!="jpeg"){
//     echo "this is not jpeg";
// }else{
//     echo "this is  jpeg";
// };
//Adhar Back 
$adharBackName= $_FILES['adharBack']['name'];
$adharBackType= $_FILES['adharBack']['type'];
$adharBackSize= $_FILES['adharBack']['size'];
$adharBackTmpName= $_FILES['adharBack']['tmp_name'];

//Driving License
$drivingLicenseName= $_FILES['drivingLicense']['name'];
$drivingLicenseType= $_FILES['drivingLicense']['type'];
$drivingLicenseSize= $_FILES['drivingLicense']['size'];
$drivingLicenseTmpName= $_FILES['drivingLicense']['tmp_name'];

//Text Details
$name = ltrim($_POST['name']) ;
$mobile =trim($_POST['mobile']) ;
$address = ltrim($_POST['address']) ;
$adharNumber =  trim($_POST['adharNum']) ;
$DrivingLicenseExp = $_POST['expdate'];
// echo $name ." ".$mobile ." ". $address ." ".$adharNumber ." ".$address." ". $DrivingLicenseExp;

$errorArray = array();
//check the size of image
function imageSizeCheck($imageSize,$ImageErrorMessage){
    global $errorArray;
    if($imageSize >50000 && $imageSize <20000){
        array_push($errorArray,$ImageErrorMessage);
        return false;
    }else{
        return true;
    }
}
// check empty or not

function emptyStringChecker($filed,$message){
    global $errorArray;
    if(strlen($filed)<=0){
        array_push($errorArray,$message);
        return false;
    }else{
        return true;
    }

    
}




//check the Type of image
function imageTypeCheck($imageType,$ImageErrorMessage){
    global $errorArray;
    
    if(pathinfo($imageType,PATHINFO_EXTENSION) =="jpeg" || pathinfo($imageType,PATHINFO_EXTENSION) =="png"){
        return true;
    }else{
        
        array_push($errorArray,$ImageErrorMessage);
        return false;
    }
}
//check for alphabet
function checkIsAlpha($str,$errorMsg){
    global $errorArray;
    if(!preg_match("/^[a-z]$/i", $str)){
        array_push($errorArray,$errorMsg);
        return false;
    }else{
        return true;
    }
}
//check for Number
function checkIsNumber($num,$errorMsg){
    global $errorArray;
    if(!is_numeric($num)){
        array_push($errorArray,$errorMsg);
        return false;
    }else{
        return true;
    }
}
//Checking for the empty string
emptyStringChecker($name,"Name Is Required.");
emptyStringChecker($mobile,"Mobile Number Is Required.");
emptyStringChecker($adharNumber,"Adhar Number Is Required.");
emptyStringChecker($drivingLicenseName,"Driving License Image Is Required.");
//checking for adhar front
if(emptyStringChecker($adharFrontName,"Adhar Card's Front Image Is Required.")){
    if(imageTypeCheck($adharFrontName,"Adhar Front Image Must Be jpg or Png.")){
    imageSizeCheck($adharFrontSize,"Adhar Front Image Must Between 20 to 50 kb.");
    }
}
//checking for adhar Back
if(emptyStringChecker($adharBackName,"Adhar Card's Back Image Is Required.")){
    if(imageTypeCheck($adharBackName,"Adhar Back Image Must Be jpg or Png.")){
    imageSizeCheck($adharBackSize,"Adhar Back Image Must Between 20 to 50 kb.");
    }
}
//checking for Driving License
if(emptyStringChecker($drivingLicenseName,"Driving License is Required.")){
    if(imageTypeCheck($drivingLicenseName,"Driving License Image Must Be jpg or Png.")){
    imageSizeCheck($drivingLicenseSize,"Driving License Image Must Between 20 to 50 kb.");
    }
}



if(sizeof($errorArray)==0){
    $adharFrontName = rand().$adharFrontName;
    $drivingLicenseName = rand().$drivingLicenseName;
    $adharBackName = rand().$adharBackName;
    $query = "INSERT INTO `userdetails`(`name`, `mobile`, `adhar_Number`, `Dr.exp`, `address`, `adhar_front`, `adhar_back`, `driving_img`) VALUES ('$name','$mobile','$adharNumber','$DrivingLicenseExp','$address','$adharFrontName','$adharBackName','$drivingLicenseName')";
    $run = mysqli_query($conn,$query);
    if($run){
        move_uploaded_file($adharFrontTmpName,"docs_Images/".$adharFrontName);
        move_uploaded_file($adharBackTmpName,"docs_Images/".$adharBackName);
        move_uploaded_file($drivingLicenseTmpName,"docs_Images/".$drivingLicenseName);
        
    }else{
        echo 'Something went wrong';
    }
    
}
else{
 foreach($errorArray as $erro){
        echo $erro;
        
    } 
    unset($errorArray);
}


?>