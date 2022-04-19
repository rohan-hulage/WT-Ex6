<?php

include_once './includes/config.php';
$result=array();
$result['error']=0;

$uid = trim($_REQUEST['uid']);
$uname = trim($_REQUEST['uname']);


$sql = "UPDATE `table1`  SET `name`= '$uname' WHERE `id` LIKE '$uid' ";

$db = mysqli_query($conn,$sql);
if(!$db){
    $result['error']-1;
    $result['errormsg']="Connection Problem";
    echo json_encode($result);
    return;
}

echo json_encode($result);
?>