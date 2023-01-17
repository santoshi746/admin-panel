<?php
session_start();

$link=mysqli_connect("localhost","root","","database");
if(isset($_POST['save'])){
    $i=$_POST['id'];
    $a1=$_POST['user'];
    $img = "pictures/".$_FILES["image"]["name"];
    // $query="INSERT INTO `pic`(`ID`, `Firstname`,`image`) VALUES ('$i','$a1','$img')";
   $query= "INSERT INTO `pic`(`ID`, `Firstname`, `image`) VALUES ('$i','$a1','$img')";
    $result=mysqli_query($link,$query);
     print_r($result);
}
$_SESSION["status"]=$a1;
echo "<img src=".$img.">";
?>