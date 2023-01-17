
<form action="pic.php" method="post" enctype="multipart/form-data">
    <input type="file" name="anu" id="">
    <input type="submit" name="s1" value="Upload" >
</form>
<?php
$link = mysqli_connect("localhost","root","","students");
$query="SELECT * FROM `images`";
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
?>

<?php
echo '<img src="pictures/'.$row['P1'].'" alt="" width="250px">';
?>
<form action="edit.php">
    <input type="submit" value="Edit" name="update" >
</form>
<?php
}
}
?>
