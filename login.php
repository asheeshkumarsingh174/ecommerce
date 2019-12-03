
<?php

session_start() ;



if(isset($_SESSION['uid']))
{

header('location:login.php');

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Bootstrap Quick Sign up Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		color: #fff;
		background: #4c535d;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
        min-height: 41px;
		box-shadow: none;
		border-color: #e1e4e5;
	}
    .form-control:focus {
		border-color: #5fcaba;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }    
	.signup-form {
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}	
    .signup-form form {
		color: #9ba5a8;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
    .signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form .btn {        
        font-size: 16px;
        font-weight: bold;
		background: #5fcaba;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background: #3fc0ad;
        outline: none !important;
	}
	.signup-form a {
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #5fcaba;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="login.php" method="post">
		<h2>Login</h2>
		<p>It's free and only takes a minute.</p>
		<hr>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Login</button>
        </div>
		
    </form>
	<div class="text-center">Want to create an account? <a href="signup.php">Signup</a></div>
</div>
</body>
</html>    

<?php

include ('dbcon.php');

if(isset($_POST['submit']))
{

$email=$_POST['email'];
$password=$_POST['password'];

$qry= "SELECT *  FROM `user1` WHERE `email` ='$email' AND  `pass` ='$password' " ;
$run=mysqli_query($con,$qry);

$row=mysqli_num_rows($run);
if($row<1)
{
?>

<script>
alert('Username or Password doesnot match');
window.open('login.php','_self');
</script>

<?php

}
else {

$data=mysqli_fetch_assoc($run);

 $id = $data['ud'];

$_SESSION['uid'] = $id ;

 header ('location:index.php');
}


}











?>


