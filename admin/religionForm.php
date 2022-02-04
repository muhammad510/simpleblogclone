<html>
<?php 
session_start();
ob_start();
include'../db.php';
?>
<head>
 <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >    
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>hello</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

</head>
<body>
<?php
if($_SESSION["userId"])
{
include'header.php' ;
include'../db.php';?>

<div class='row'>
 <div class="col-md-8">
<div class='container'>
<div class='jumbotron'>
<form action=" " method="post" enctype="multipart/form-data">
<div class="container">
  <label for=""><b>write heading</b></label><br/><br/>
    <textarea name='rname' cols="30" rows="5"placeholder="Write heading..."></textarea><br/><br/>
    <label for=""><b>write intro</b></label><br/><br/>
     <textarea name='intro' cols="80" rows="20"placeholder="Write introduction...."></textarea><br/><br/>
    
    <button type="submit" class="registerbtn"  value='submit' name="rsubmit">submit</button>
  </div>
</form>
</div>
</div>

<?php
if(isset($_POST['rsubmit']))
{
$rname=$_POST['rname'];
$intro=$_POST['intro'];
$sql="INSERT INTO `religion`( `rname`,intro) VALUES ('$rname','$intro');";

$r=mysqli_query($connect,$sql);
}


?>
</div>

<div class="col-md-4">

<table class="table table-striped table-bordered table-hover table-condensed">
<thead>
<tr>
<th>r_NU</th><th>r_Name</th>
</tr>
</thead>
<?php 
$sql1="SELECT * FROM religion;";
$r1=mysqli_query($connect,$sql1);
while($row=mysqli_fetch_assoc($r1))
{
$rname=$row['rname'];
$rno=$row['rno'];
?>

<tbody>
<tr>
<td><?php echo $rno;?></td>
<td><?php echo $rname;?></td>
<td><?php echo "<a href='editReligion.php?rid=$rno'>EDIT</a>";?></td>
<td><?php echo "<a href='deleteReligion.php?rid=$rno'>delete</a>";?></td>
</tr>
</tbody>
<?}?>
</table>
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
