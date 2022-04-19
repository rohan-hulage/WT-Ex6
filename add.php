<?php
include_once './includes/config.php';
$result=array();
$result['error']=0;
$book_id = trim($_REQUEST['book_id']);
$book_title = trim($_REQUEST['book_title']);
$book_author = trim($_REQUEST['book_author']);
$book_price = trim($_REQUEST['book_price']);
$quantity = trim($_REQUEST['quantity']);
$sql="INSERT INTO `ebook` (`book_id`, `book_title`, `book_author`, `book_price`, `quantity`) VALUES ('$book_id', '$book_title', '$book_author', '$book_price', '$quantity')";
$db=mysqli_query($conn,$sql);
if(!$db){
    $result['error']=1;
    $result['errormsg']="Connection Problem !";
    echo json_encode($result);
    return;             
}
echo json_encode($result);
?>