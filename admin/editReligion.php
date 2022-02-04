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

<?php 
if(isset($_GET['rid']))
{
$rid=$_GET['rid'];
//echo"hello". $rid;
$_SESSION["rid"] = $rid;
$q="SELECT * FROM religion WHERE rno='$rid';";
$qr=mysqli_query($connect,$q);
$row=mysqli_fetch_array($qr);
$rname=$row['rname'];
//$img=$row['image'];
$intro=$row['intro'];
//echo $head;
}

?>
<form action="updateR.php " method="post" enctype="multipart/form-data">

<div class="container">
  <label for=""><b>religion name</b></label><br/><br/>
    
    <textarea name='rname' cols="30" rows="5"placeholder="Write heading..."><?php echo $rname;?></textarea> <br/><br/>
    
<div class="container">
  <label for=""><b>write somethig about religion</b></label><br/><br/>
    
    <textarea name='intro' cols="80" rows="20"placeholder="Write here..."><?php echo $intro;?></textarea>
    <button type="submit" class="registerbtn"  value='submit' name="rupdate">update</button>
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
