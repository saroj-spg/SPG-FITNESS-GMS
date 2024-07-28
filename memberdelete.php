<?php
include'./connect.php';
$member_id=$_GET['mid'];
$sql="DELETE FROM member WHERE member_id='$_GET[mid]'";
$result=$conn->query($sql);
if($result){
    header('location:memberdisplay.php');
    //echo "Deleted sucessfully";
}
else
die (mysqli_error($conn));
?>