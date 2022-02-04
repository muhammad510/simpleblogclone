<?php
include'../db.php';
if(isset($_GET['rid']))
{
$rid=$_GET['rid'];
$q="DELETE  FROM religion WHERE rno='$rid';";
$qr="DELETE  FROM post WHERE rno='$rid';";
$r=mysqli_query($connect,$qr);
$rq=mysqli_query($connect,$q);
if($r&&$rq)
{
header('location:religionForm.php');
}
else
{
echo 'not deleted';
}


}








?>
