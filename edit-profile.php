<?php session_start();
include_once('config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
$userid=$_SESSION['id'];
    $msg=mysqli_query($con,"update users set fname='$fname',lname='$lname',contactno='$contact' where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
}
}


    
?>
<html>
<html>
    <head>
       
        <title>Edit Profile</title>
        
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
    <form method="post">
    <div class="card-body">
    <table class="table table-bordered">
        <tr>
        <th>First Name</th>
        <td><input class="form-control" id="fname" name="fname" type="text" value="<?php echo $result['fname'];?>" required /></td>
        </tr>
        <tr>
        <th>Last Name</th>
        <td><input class="form-control" id="lname" name="lname" type="text" value="<?php echo $result['lname'];?>"  required /></td>
        </tr>
        <tr>
        <th>Contact No.</th>
        <td colspan="3"><input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno'];?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /></td>
        </tr>
        <tr>
        <th>Email</th>
        <td colspan="3"><?php echo $result['email'];?></td>
        </tr>
        <tr>
        <th>Reg. Date</th>
        <td colspan="3"><?php echo $result['posting_date'];?></td>
        </tr>
        <tr>
        <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

        </tr>
        </tbody>
        </table>
        </div>
        </form>
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

