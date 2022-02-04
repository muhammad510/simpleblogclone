
<?php
session_start();
?><html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>hello</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

 <body>
 <?php include'header.php'?>
 <div class='row'>
   <div class='col-md-2'>
   <?php
     include'db.php';
     if(isset($_SESSION["rno"]))
     {
        $rno1= $_SESSION["rno"];
        //echo $rno1;
        $sql="SELECT * FROM post where rno=$rno1;";
        $r2=mysqli_query($connect,$sql);
        $r3=mysqli_num_rows($r2); 

             while($rows1=mysqli_fetch_assoc($r2))
             {
            $head1=$rows1['heading'];
            $sno=$rows1['sno'];
          ?> 
     <h2><?php echo "<a href='individual1.php?id=$sno'>$head1</a>";?></h2>
  <?php }} ?>   
   
   </div>
   
   
   <div class='col-md-8'>
       
          <?php 
          
        if(isset($_GET['id']))
         {
        $id1=$_GET['id'];
         //$_SESSION["rno"] = $rno;
        $sql2="SELECT * FROM post where sno=$id1;";
        $r4=mysqli_query($connect,$sql2);
        $r5=mysqli_num_rows($r4); 
         while($rows2=mysqli_fetch_assoc($r4))
             {
            $head2=$rows2['heading'];
            $sno1=$rows2['sno'];
            $content=$rows2['content'];
            $img=$rows2['image'];
          ?> 
     <h2><?php echo "<a href='individual1.php?id=$sno1'>$head2</a>";?></h2>
        <figure class="mb-4">
             <p>  <?php echo "<img  class='img-fluid  img-responsive' src='image1/$img' alt='BUDHHA'  />"; ?></p
                        
          </figure>                     
                        
     <p style="font-size:20px; text-align: justify;"><?php echo $content;?></p>
  <?php }} ?>
    
   </div>
   <div class='col-md-2'>
   <!--h1>write here ishu</h1-->
   </div>
 </div>   
<?php include'footer.php'?>
<body>
</html>
