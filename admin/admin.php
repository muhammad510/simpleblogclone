<html>
<?php 
session_start();
ob_start();
?>

<head>


 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >  
</head>
<body>
<a href='logout.php'>LOGOUT</a>
<?php
include"header.php";
if($_SESSION["userId"])
{

?>
<div class="row">

<div class="col-sm-2">
<div class='jumbotron'>

<?php 
include'../db.php';
$q="SELECT * FROM religion;";
$r=mysqli_query($connect,$q);
while($row=mysqli_fetch_array($r))
{
$rno=$row['rno'];
$rname=$row['rname'];
?>

<h2><?php echo"<a href='admin.php?rid=$rno'> $rname </a>";?></h2>
<?php }?>
</div>
</div>



<div class="col-sm-6">
<div class='container'>

<?php if(isset($_GET['rid']))
{
$rid=$_GET['rid'];
echo $rid;
$_SESSION["rid"] = $rid;
}

?>
<h2>ADD NEW POST</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="container">
  <label for=""><b>write heading</b></label><br/><br/>
    
    <textarea name='heading' cols="30" rows="5"placeholder="Write heading..."></textarea>
   
  </div>
  <div class="container">
    <h1>Enter your data</h1>    
    <label for=""><b>insert image</b></label>
   <input type="file" name="img1" />
   </div>
   
<br/><br/>
<div class="container">
  <label for=""><b>write somethig about image</b></label><br/><br/>
    
    <textarea name='content' cols="100" rows="10"placeholder="Write here..."></textarea>
    <button type="submit" class="registerbtn"  value='submit' name="submit">submit</button>
  </div>
</form>
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
