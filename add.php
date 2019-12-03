<?php

session_start();
$ud=$_SESSION['uid'];

 
  $sub=$_POST['submit'] ;
  


 include('dbcon.php');

  $qy="SELECT * FROM `user1` WHERE `ud`= $ud" ;
  $r=mysqli_query($con,$qy);
  $data=mysqli_fetch_assoc($r);
  $old_wish=$data['wishlist'];
  $concat=$old_wish.".".$sub;

 
  
  $qry="UPDATE `user1` SET `wishlist`='$concat' WHERE `ud`=$ud ";
  $run=mysqli_query($con,$qry);
  
  



?>