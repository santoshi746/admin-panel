<?php
session_start();
$link = mysqli_connect("localhost", "root","","students");
if(isset($_POST['Add'])){
    $id = $_POST['ID'];
    $first = $_POST['Firstname'];
    $last = $_POST['Lastname'];
    $DOB = $_POST['DOB'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $Gender = $_POST['gender']; 
    $aadhar = $_POST['Aadhar']; 
    $mobile = $_POST['mobile']; 
    $alternate = $_POST['alternate']; 
    $address = $_POST['Address']; 
    $state = $_POST['state']; 
    $district = $_POST['district']; 
    $pin = $_POST['pin_code']; 
    $YOP = $_POST['YOP']; 
    $refference = $_POST['refference']; 
    $Passport = $_FILES["passport"]["name"]; 
   $query = "INSERT INTO `details`(`ID`,`Firstname`,`Lastname`,`DOB`,`age`,`email`,`gender`,`Aadhar`,`mobile`,`alternate`,`address`,`state`,`district`,`pin_code`, `YOP`,`refference`, `passport`)VALUES('$id','$first','$last','$DOB','$age','$email','$Gender','$aadhar','$mobile','$alternate','$address','$state','$district','$pin','$YOP','$refference','$Passport')";
   $res=mysqli_query($link,$query);
   if($res){
       move_uploaded_file(($_FILES["passport"]["tmp_name"]),"pictures/".$_FILES["passport"]['name']);
echo "uploaded";
//pictures is a new folder which is created for uploading the image files
   }
   else{
       echo "unsucessfull";
   }
}
$_SESSION["message"]="<h3>".$first."</h3>";

?>