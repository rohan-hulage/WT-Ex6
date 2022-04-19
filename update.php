<?php
include_once './includes/config.php';
$result=array();
$result['error']=0;
$bid = trim($_REQUEST['bid']);
$btit = trim($_REQUEST['btit']);

$sql="UPDATE `ebook` SET `book_title`='$btit' WHERE  `book_id` LIKE '$bid'";
$db=mysqli_query($conn,$sql);
if(!$db){
    $result['error']=1;
    $result['errormsg']="Connection Problem !";
    echo json_encode($result);
    return;
}
echo json_encode($result);
?>