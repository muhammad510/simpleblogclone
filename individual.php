<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
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
        <!-- Responsive navbar-->
       <?php 
       include'db.php';
       include'header.php';
       ?>
        <?php 
        if(isset($_GET['rid']))
        {
        $rno=$_GET['rid'];
         $_SESSION["rno"] = $rno;
        $sql1="SELECT * FROM post where rno=$rno;";
        $r2=mysqli_query($connect,$sql1);
        $r3=mysqli_num_rows($r2); 
        ?>
  <!--div class='container'-->
    
     <div class="row">
     
            <div class="col-md-2">
             <div class='jumbotron'> 
             <?php
             while($rows1=mysqli_fetch_assoc($r2))
             {
            $head1=$rows1['heading'];
            $sno=$rows1['sno'];
             //$intro=$rows1['intro'];
          ?> 
     <h2><?php echo "<a href='individual1.php?id=$sno'>$head1</a>";?></h2>
  <?php }} ?>
    </div>
    </div>

    
    <div class="col-md-8">
        <!-- Page content-->
     <?php
         $sql2="SELECT * FROM religion where rno=$rno;";
         $r3=mysqli_query($connect,$sql2);
         $row3=mysqli_fetch_assoc($r3);
         $intro=$row3['intro'];
         $rname=$row3['rname'];
         ?>
       
        <h1>About:<i style='color:red;'> <?php echo $rname;?></i><h1>
        
        <p ><i style=" font-size:30px;"><?php echo $intro;?> </i> <p>
        
        
       </div>   
       
    <div class="col-md-2">
    <div class='jumbotron'> 
     <p>  </p>
    </div>
    </div>
    
    </div>
     <!--/div-->
     
        <!-- Footer-->
        <footer class="bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        
      
    </body>
</html>
