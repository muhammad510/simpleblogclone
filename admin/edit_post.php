<html>
<?php 
session_start();
ob_start();
include'../db.php';
?>

<head>


 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >    
</head>
<body>
<?php
if($_SESSION["userId"])
{
include'header.php';
?>
<a href='logout.php'>LOGOUT</a>

<div class="row">

<div class="col-sm-2">
<div class='jumbotron'>


</div>
</div>



<div class="col-sm-6">
<div class='container'>
<div class='jumbotron'>
<?php if(isset($_GET['pid']))
{
$pid=$_GET['pid'];
echo $pid;
$_SESSION["pid"] = $pid;
$q="SELECT * FROM post WHERE sno='$pid';";
$qr=mysqli_query($connect,$q);
$row=mysqli_fetch_array($qr);
$head=$row['heading'];
$img=$row['image'];
$content=$row['content'];
echo $head;
}

?>
<form action="upload_edit.php" method="post" enctype="multipart/form-data">

<div class="container">
  <label for=""><b>write heading</b></label><br/><br/>
    
    <textarea name='heading' cols="30" rows="5"placeholder="Write heading..."><?php echo $head;?></textarea>
   
  </div>
  <div class="container">
    <h1>Enter your data</h1>    
    <label for=""><b>insert image</b></label>
   <input type="file" name="img1" />
   </div>
   
<br/><br/>
<div class="container">
  <label for=""><b>write somethig about image</b></label><br/><br/>
    
    <textarea name='content' cols="100" rows="10"placeholder="Write here..."><?php echo $content;?></textarea>
    <button type="submit" class="registerbtn"  value='submit' name="update">update</button>
  </div>
</form>
</div>
</div>


</div>
</div>

<?php 
} 
else
{
header('location:index.php');
}
?>
</body>
</html>
