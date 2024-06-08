<?php session_start(); 
include_once('config.php');
 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT id,fname FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
header("location:welcome.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?>

<html>
<html>
    <head>
       
        <title>Student Login</title>
        <link href="styles.css" rel="stylesheet" />
       
    </head>
    <body class="bg-primary">
    <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">

<div class="card-header">
<h2 align="center">Student Registration and Login System</h2>
<hr />
    <h3 class="text-center font-weight-light my-4">Student Login</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="uemail" type="email" placeholder="name@example.com" required/>
<label for="inputEmail">Email address</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" name="password" type="password" placeholder="Password" required />
<label for="inputPassword">Password</label>
</div>


<div class="d-flex align-items-center justify-content-between mt-4 mb-0">

<button class="btn btn-primary" name="login" type="submit">Login</button>
</div>
</form>
</div>
        <div class="card-footer text-center py-3">
        <div class="small"><a href="signup.php">Sign up</a></div>
        <div class="small"><a href="index.php">Home</a></div>
            </div>
                </div>
                </div>
                </div>
                    </div>
                </main>
            </div>
<?php include('footer.php');?>
        </div>
       
    </body>
</html>
