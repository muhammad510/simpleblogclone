<?php 
session_start();
ob_start();
include'../db.php';
?>
<?php 
$pid=$_SESSION['pid'];
if(isset($_POST['update']))
{
$heading2=$_POST['heading'];
$content2=$_POST['content'];
 $imgname=$_FILES['img1']['name'];
  $tempimgname=$_FILES['img1']['tmp_name'];
  
  move_uploaded_file($tempimgname,"../image1/$imgname");
  
$q1="UPDATE post SET heading = '$heading2', image='$imgname', content='$content2' WHERE sno='$pid';";

$r1=mysqli_query($connect,$q1);
}
if($r1)
{
header('location:control.php');
}
else
{
echo "NOT updated".mysqli_error($connect);
echo $pid;
}
?>
