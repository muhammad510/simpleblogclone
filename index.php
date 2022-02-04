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
       include'header.php';?>
        <?php 
        $sql="SELECT * FROM religion;";
        $r=mysqli_query($connect,$sql);
        $r1=mysqli_num_rows($r); 
        ?>
  <!--div class='container'-->
    
     <div class="row">
        
            <div class="col-md-2">
             <div class='jumbotron'> 
             <?php
             while($rows1=mysqli_fetch_assoc($r))
        {
        $rname=$rows1['rname'];
        $rno=$rows1['rno'];
          ?> 
     <h2><?php echo "<a href='individual.php?rid=$rno'>$rname</a>";?></h2>
  <?php } ?>
    </div>
    </div>

    
    <div class="col-md-8">
        <!-- Page content-->
            
        </ol>
        <?php
        $sql="SELECT * FROM post;";
        $r=mysqli_query($connect,$sql);
        $r1=mysqli_num_rows($r); 
       
        while($rows=mysqli_fetch_assoc($r))
        {
        $head=$rows['heading'];
        $img=$rows['image'];
        $content=$rows['content'];
        ?>
         <div class='jumbotron'>
                           <h1  style="color:red;"><u><b><?php echo $head;  ?></b></u></h1>
                            <!-- Post meta content-->                        
                           
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                      <p>  <?php echo "<img  class='img-fluid  img-responsive' src='image1/$img' alt='BUDHHA'  />"; ?></p
                        
                        </figure>                     
                        
                        <!-- Post content-->                    
                     <p style="font-size:30px;text-align: justify;"><?php echo $content;?></p>            
                                                          
                   </div>
                    
                    
                   <?php 
                   
                   //include'comments.php';
                   }
                   // include'side_nav.php';
                   ?>
                   </ol>
       </div>   
       
       
    <div class="col-md-2 container">
         <div class='jumbotron'> 
     <!--p> 
write here ishu
</p-->
    </div>
    </div>
    
     <!--/div-->
     
        <!-- Footer-->
       <?php include'footer.php'?>
        <script src="js/scripts.js"></script>
    </body>
</html>
