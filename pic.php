<?php
$link=mysqli_connect("localhost","root","","students");
if(isset($_POST['s1'])){
    $a1=$_FILES["anu"]["name"];   
    $query="INSERT INTO `images`(`P1`) VALUES ('$a1')";
    $res=mysqli_query($link,$query);
    if($res){
        move_uploaded_file(($_FILES['anu']["tmp_name"]),"pictures/".$_FILES['anu']['name']);
echo "uploaded";
//pictures is a new folder which is created for uploading the image files
    }
    else{
        echo "unsucessfull";
    }
}
?>