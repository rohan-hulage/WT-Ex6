<?php
//echo "yes";

include_once './includes/config.php';
$result=array();
$result['error']=0;

$id = trim($_REQUEST['sid']);
$name = trim($_REQUEST['name']);
$city = trim($_REQUEST['city']);
$dept = trim($_REQUEST['dept']);
$mobile = trim($_REQUEST['mobile']);
$email = trim($_REQUEST['email']);

$sql = "INSERT INTO `table1` (`id`, `name`, `city`, `dept`, `email`, `mobile`) VALUES ($id, '$name', '$city', '$dept', '$email', $mobile) ";
$db = mysqli_query($conn,$sql);
if(!$db){
    $result['error']=1;
    $result['errormsg']="Connection Problem1";
    echo json_encode($result);
    return;
}

echo json_encode($result);

?>