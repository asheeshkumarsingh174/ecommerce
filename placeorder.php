<?php

session_start();


if(isset($_SESSION['uid']))

{
	 $GLOBALS['user_id']=$_SESSION['uid'];
	 
}

else
  {

    header('location:login.php');
  }

?>









<?php
		
		include('dbcon.php');
		
		@$fullname=$_POST['fullname'];
		@$email=$_POST['email'];
		@$address=$_POST['address'];
		@$zip=$_POST['zip'];
		@$phone=$_POST['phone'];
		@$method=$_POST['payment'];
		@$onotes=$_POST['onotes'];
        @$name=$_POST['name'];
        @$no=$_POST['no'];
        @$price=$_POST['p'];

        @$pro_bought=$_POST['pro_bought'];
        
         
         $total=$price*$no;
        
        
		
		 
       
		if(isset($_POST['place']))

		{
			
			
			


			$ash="INSERT INTO `orders` (`name`,`email`,`address`,`zip`,`phone`,`onotes`,`pname`,`qty`,`pmethod`,`total`) VALUES ('$fullname','$email','$address','$zip','$phone','$onotes','$name','$no','$method','$total')" ;
			$done=mysqli_query($con,$ash);


			if($done==true)
		    {
          
          
          $rid=$_SESSION['uid'];

          $con=mysqli_connect('localhost','root','','ecommerce');

  $qy="SELECT * FROM `user1` WHERE `ud`= $rid" ;
  $r=mysqli_query($con,$qy);
  $data=mysqli_fetch_assoc($r);
  $old_product=$data['products_bought'];
  $concat=$old_product.".".$pro_bought;

  $qry="UPDATE `user1` SET `products_bought`='1' WHERE `ud`=$rid ";
  $run=mysqli_query($con,$qry);



 
  
 
  
          
          



            ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>




     <div style="margin-top:170px">     
	 <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">Your order was successfuly completed.</p>
            <p><a href="index.php" class="btn btn-sm btn-primary">Back to shop</a></p>
          </div>
        </div>
      </div>
    </div>
	</div>

	</body>
	</html>


			<?php
            


			}
			

			

		}
		
      
		


      
      	
         ?>
		