<?php

include_once './includes/config.php';
$result=array();
$result['error']=0;

$did = trim($_REQUEST['did']);


$sql = "DELETE FROM `table1`  WHERE `id` LIKE '$did' ";

$db = mysqli_query($conn,$sql);
if(!$db){
    $result['error']-1;
    $result['errormsg']="Connection Problem";
    echo json_encode($result);
    return;
}

echo json_encode($result);
?>