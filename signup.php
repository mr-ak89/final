<?php session_start();
require_once('config.php');

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?>

<html>
<html>
    <head>
    <title>Signup</title>
        <link href="styles.css" rel="stylesheet" />

    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
                <main>
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
<h2 align="center">Student Registration and Login System</h2>
<hr />
<h3 class="text-center font-weight-light my-4">Create Account</h3></div>
<div class="card-body">



<form method="post" name="signup" onsubmit="return checkpass();">

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="fname" type="text" placeholder="Enter your first name" required />
<label for="inputFirstName">First name</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="lname" type="text" placeholder="Enter your last name" required />
 <label for="inputLastName">Last name</label>
</div>
</div>
</div>


<div class="form-floating mb-3">
<input class="form-control" id="email" name="email" type="email" placeholder=" " required />
<label for="inputEmail">Email address</label>
</div>
 

<div class="form-floating mb-3">
<input class="form-control" id="contact" name="contact" type="text" placeholder="1234567890" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />
<label for="inputcontact">Contact Number</label>
</div>
        


<div class="row mb-3">
<div class="col-md-6">
 <div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="password" name="password" type="password" placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
<label for="inputPassword">Password</label>
</div>
</div>
                                                

<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
<label for="inputPasswordConfirm">Confirm Password</label>
</div>
</div>
</div>
                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">Create Account</button></div>
</div>
            </form>
                </div>
                <div class="card-footer text-center py-3">
        <div class="small"><a href="login.php">Login</a></div>
        <div class="small"><a href="index.php">Home</a></div>
    <div class="card-footer text-center py-3">
    
            </div>
            
            </div>
                </div>
                </div>
                    </div>
                </main>
            </div>
         <?php include_once('footer.php');?>
        </div>
        
    </body>
</html>
