<html>
<?php 
session_start();
ob_start();
?>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >  
</head>
<body>
<?php
include'header.php';
if($_SESSION["userId"])
{

?>
<div class='row'>
<div class='col-sm-3'>
<table class='table-dark'>
<thead>
<tr>
<th>s.no</th>
<th>Religion</th>
</tr>
</thead>
<?php
include '../db.php';
$q='SELECT * FROM religion;';
$r=mysqli_query($connect,$q);
while($row=mysqli_fetch_assoc($r))
{
$rid=$row['rno'];
$rname=$row['rname'];

?>
<tbody>
<tr>
<td><?php echo $rid; ?></td>
<td><?php echo"<a href='control.php?id=$rid'>$rname</a>";?></td>

</tr>
</tbody>
<?php } ?>
</table>

</div>
<div class='col-sm-9'>

<?php 
if(isset($_GET['id']))
{
$rid1=$_GET['id'];
$q1="SELECT *FROM post WHERE rno=$rid1;";
$r1=mysqli_query($connect,$q1);
?>
<table class='table'>
<thead>
<tr>
<th>HEAd</th>
<th>image</th>

</tr>
</thead>
<?php
while($row1=mysqli_fetch_assoc($r1))
{
$head=$row1['heading'];
$image=$row1['image'];
$content=$row1['content'];
$pid=$row1['sno'];
?>
<tbody>
<tr>
<td><?php echo $head; ?></td>
<td><?php echo "<img  class='img-fluid img-thumbnail' src='../image1/$image' alt='BUDHHA'  />"; ?></td>
<td><?php echo "<a href='edit_post.php?pid=$pid'>EDIT</a>";?><td>
</tr>
</tbody>
<?php } ?>
</table>
<?php } ?>
</div>
</div>
<?php }

else
{
header('location:index.php');
}
?>
</body>
</html>
