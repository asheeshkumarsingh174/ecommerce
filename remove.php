
<?php

session_start();

$y=$_SESSION['uid'];


include('dbcon.php');
	$w=$_SESSION['uid'];
	$a="SELECT * FROM `user1` WHERE `ud`='$y' ";
    $m=mysqli_query($con,$a);
	$t=mysqli_fetch_assoc($m);
	$wish=$t['wishlist'];
	echo $wish;

    $delete=$_POST["delete"];
	$new_wish=str_replace($delete,"",$wish);
    

   

   $qry="UPDATE `user1` SET `wishlist`='$new_wish' WHERE `ud`='$y' ";
   mysqli_query($con,$qry);
	
	
	
	
										
   

                            

?>                            