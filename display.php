<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Employee Management System</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
        }
    </style>
</head>

<body>

<center><h1>Employee Management System</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
        <th>Dept.</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>



<?php
include_once "./includes/config.php";
$sql = "SELECT * FROM `table1`";
$db = mysqli_query($conn,$sql);
$row = null;

if(mysqli_num_rows($db)>0){
    while($row=mysqli_fetch_assoc($db))
    {
        echo "
        <tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['city']."</td>
        <td>".$row['dept']."</td>
        <td>".$row['mobile']."</td>
        <td>".$row['email']."</td>
        </tr>
        ";
    }
}

?>
</table>
</center>


    <script src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./index.js"></script>
</body>

</html>