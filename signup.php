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
    <form action="signup.php" method="post">
		<h2>Sign Up</h2>
		<p>It's free and only takes a minute.</p>
		<hr>
        <div class="form-group">
        	<input type="text" class="form-control" name="fullname" placeholder="Full name" required="required">
        </div>

        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cnf" placeholder="Confirm Password" required="required">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required="required">
        </div>

        <div class="form-group">
            <input type="tel" class="form-control" name="phone" placeholder="Phone" required="required">
        </div>


		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
		<p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>
</html>   


<?php


include ('dbcon.php');

if(isset($_POST['submit'])){

    $fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cnf_pass=$_POST['cnf'];
	$address=$_POST['address'];
	$phone=$_POST["phone"];
	
	
	$qry= "SELECT * FROM `user1` WHERE `username`='$username' ";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);

	$qry= "SELECT * FROM `user1` WHERE `email`='$email' ";
	$run2=mysqli_query($con,$qry);
	$r2=mysqli_num_rows($run2);
	
	
	
			
	if($row==1)
	{ 
       ?>
       <script>alert("Username already taken");</script>
	   <?php
	} 
	else
	{
	   if($r2==1)
	   {
		?>
		<script>alert("There is already an account with this email id");</script>
		<?php
	   }
	   else
	   {
		   if($password!=$cnf_pass)
		   {
			?>
			<script>alert("Password and confirm password does not match");</script>
			<?php
		   }
		   else
		   {
			  

			  $num=strval($phone);
			  $size=strlen($num);
			  if(($size!=10) || (is_numeric($phone)==false) )
			  {
                ?>
                <script>alert("Size of phone number should be exactly of 10 digits and it should not contain alphabets");</script>
	            <?php
			  }
			  else
			  {
                $qry2="INSERT INTO `user1` (`fullname`,`username`,`email`,`pass`,`address`,`phone`) VALUES ('$fullname','$username','$email','$password','$address','$phone') " ;
				$run3=mysqli_query($con,$qry2);
				
				if($run3==true)
				{
					?>
                    <script>alert("Account created succesfully");</script>
	                <?php
				}

			  }
		   }
	   }
	}
 
   
}


	   