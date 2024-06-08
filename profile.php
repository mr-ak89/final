<?php session_start();
include_once('config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Profile</title>
        
        <link href="styles.css" rel="stylesheet" />
        
    </head>
    <body class="sb-nav-fixed">
    <?php include_once('navbar.php');?>
    <div id="layoutSidenav">
    <?php include_once('sidebar.php');?>
    <div id="layoutSidenav_content">
    <main>
    <div class="container-fluid px-4">
                        
<?php 
$userid=$_SESSION['id'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
    <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
    <div class="card mb-4">
                     
     <div class="card-body">
      <a href="edit-profile.php">Edit</a>
    <table class="table table-bordered">
        <tr>
        <th>First Name</th>
        <td><?php echo $result['fname'];?></td>
        </tr>
        <tr>
        <th>Last Name</th>
        <td><?php echo $result['lname'];?></td>
        </tr>
        <tr>
        <th>Email</th>
        <td colspan="3"><?php echo $result['email'];?></td>
        </tr>
        <tr>
        <th>Contact No.</th>
        <td colspan="3"><?php echo $result['contactno'];?></td>
        </tr>
        <tr>
        <th>Reg. Date</th>
        <td colspan="3"><?php echo $result['posting_date'];?></td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
<?php } ?>

        </div>
        </main>
          <?php include('footer.php');?>
            </div>
        </div>
       
    </body>
</html>
<?php } ?>
