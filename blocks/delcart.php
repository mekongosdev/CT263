<?php
// session_start();
$cart=$_SESSION['cart'];
$id=$_GET['productid'];
if($id == 0)
{
 unset($_SESSION['cart']);
}
else
{
unset($_SESSION['cart'][$id]);
}
// header("location: index.php");
// header("Location:index.php?p=Cart");
// echo '<meta http-equiv="refresh" content="0",url=index.php?p=Cart"">';
echo '<meta http-equiv="refresh" content="0;url=javascript:history.go(-1)">';
// exit();
?>
