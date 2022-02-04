<?php 
session_start();
ob_start();
?>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >  
</head>

<body>

<?php
include'header.php';
include'../db.php';
if(isset($_POST['submit']))
{
$rid= $_SESSION["rid"];
$head=$_POST['heading'];
$content=$_POST['content'];
  $imgname=$_FILES['img1']['name'];
  $tempimgname=$_FILES['img1']['tmp_name'];
  
  move_uploaded_file($tempimgname,"../image1/$imgname");
 //echo 'yes';
 $sql1="INSERT INTO `post`(rno,`heading`, `image`, `content`) VALUES ('$rid','$head','$imgname','$content');";
  if(mysqli_query($connect, $sql1))
    {
   echo"Records inserted successfully.";
   echo "<a href='admin.php'>add+</a>";
  // header('location:admin.php');
    } 
   else
     {
     echo 'not inserted';
   echo "ERROR: Could not able to execute $sql1. " . mysqli_error($connect);
    }
   

}
else
{
echo 'hello';
}
?>
</body>
</html>
