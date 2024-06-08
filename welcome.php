<?php session_start();
include_once('config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>

<html>
    <head>
        
        <link href="styles.css" rel="stylesheet" />
        
    </head>
    <body class="sb-nav-fixed">
    <?php include_once('navbar.php');?>
    <div id="layoutSidenav">
    <?php include_once('sidebar.php');?>
    <div id="layoutSidenav_content">
        <main>
        <div class="container-fluid px-4">
        <h1 class="mt-4"> Student Dashboard</h1>
        <hr />
        

<?php 
$userid=$_SESSION['id'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>                        
    <div class="row" >
    <div class="col-xl-5 col-md-6" >
    <div class="card bg-primary text-white mb-4">
    <div class="card-body">Welcome Back <?php echo $result['fname'].$result['lname'];?></div>
     <div class="card-footer d-flex align-items-center justify-content-between">
    <a class="small text-white stretched-link" href="profile.php">View Profile</a>
  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
     </div>
       </div>
          </div>
         </div>



<?php } ?>
  </div>
    </div>
    </div>
    </main>
          <?php include('footer.php');?>
            </div>
        </div>
       
    </body>
</html>
<?php } ?>
