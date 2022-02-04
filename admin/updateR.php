<?php
session_start();
ob_start();
?>
<?php 
include'../db.php';
$rid=$_SESSION["rid"];
//echo $rid;
if(isset($_POST['rupdate']))
{
$rname=$_POST['rname'];
$intro=$_POST['intro'];
echo $rname<'br/>';
echo $intro;
$q1="UPDATE `religion` SET `rname`='$rname',`intro`='$intro' WHERE  rno='$rid';";
//echo $rid;
$qrr=mysqli_query($connect,$q1);
echo $rid;
if($qrr)
{
header('location:religionForm.php');
}
else
{
echo "not updated".mysqli_error($connect);
}
}



?>
