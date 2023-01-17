<?php
$link = mysqli_connect("localhost","root","","students");
$query = "SELECT * FROM `details`";
$res = mysqli_query($link ,$query);
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>DOB</th>
        <th>age</th>
        <th>email0</th>
        <th>gender</th>
        <th>Aadhar</th>
        <th>mobile</th>
        <th>alternate</th>
        <th>Address</th>
        <th>state</th>
        <th>District</th>
        <th>pin code</th>
        <th>year of pass</th>
        <th>refference</th>
        <th>Pass photo</th>
        <th>Actions</th>
    </tr>
    <?php
  if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_array($res)){
        ?>
    <tr>
        <td>
            <?php
            echo $row['ID'];
            ?>
        </td>
        <td>
            <?php
            echo $row['Firstname'];
            ?>
        </td>
        <td>
            <?php
            echo $row['Lastname'];
            ?>
        </td>
        <td>
            <?php
            echo $row['DOB'];
            ?>
        </td>
        <td>
            <?php
            echo $row['age'];
            ?>
        </td>
        <td>
            <?php
            echo $row['email'];
            ?>
        </td>
        <td>
            <?php
            echo $row['gender'];
            ?>
        </td>
        <td>
            <?php
            echo $row['Aadhar'];
            ?>
        </td>
        <td>
            <?php
            echo $row['mobile'];
            ?>
        </td>
        <td>
            <?php
            echo $row['alternate'];
            ?>
        </td>
        <td>
            <?php
            echo $row['Address'];
            ?>
        </td>
        <td>
            <?php
            echo $row['state'];
            ?>
        </td>
        <td>
            <?php
            echo $row['district'];
            ?>
        </td>
        <td>
            <?php
            echo $row['pin_code'];
            ?>
        </td>
        <td>
            <?php
            echo $row['refference'];
            ?>
        </td>
        <td>
           <?php
            echo '<img src="pictures/'.$row['passport'].'" alt="" width="150px">';
           ?>
        </td>
        <td>
        <form action="update.php">
                    <input type="hidden" name="abc" value="<?php echo $row['ID']; ?>">
                    <input type="submit" value="Update" name="update">
                </form>
        </td>
        <td>
        <form action="delete.php">
                    <input type="hidden" name="abc" value="<?php echo $row['ID']; ?>">
                    <input type="submit" value="delete" name="delete">
                </form>
        </td>
    </tr>
    <?php
    }
  }
?>
</table>
</body>
</html>