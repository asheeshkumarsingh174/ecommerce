<?php

session_start();


if(isset($_SESSION['uid']))

{
    
}

else
  {

    header('location:login.php');
  }

?>







<!DOCTYPE html>
<html lang="en">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container emp-profile">
           
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Electro 
                                    </h5>
                                    <h6>
                                       My account
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">



                <?php
                 
                 include('dbcon.php');
                 $u=$_SESSION['uid'];
                 $er="SELECT * FROM `user1` WHERE  `ud`='$u' ";
                 $top=mysqli_query($con,$er);
                 $data=mysqli_fetch_assoc($top);

                 $GLOBALS['d']=$data;









                ?>



                   
                    
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d['username']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d['fullname']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d['email']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $d['phone']; ?></p>
                                            </div>
                                        </div>
                                        
                                            
                                        
                            </div>
                            <div class="col-md-2" style="margin-left:-18px;" >
                                <form action="account.php" method="POST">
                        <input type="submit" class="profile-edit-btn" name="btn" value="Change Password"/>
                        <h6></h6>
                        <input type="submit" class="profile-edit-btn" name="plist" value="Product list"/>
                                </form>
                    </div>
                            
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<?php
if(isset($_POST['btn']))

{
     ?>
     
<div style="padding-left:85px">
<form action="account.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Old Password</label>
    <input type="text"  name="op" style="width:30%;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter old password">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="text" name="np" style="width:30%;"  name="new" class="form-control" id="exampleInputPassword1" placeholder="New Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm New Password</label>
    <input type="text" style="width:30%;"  name="cnp" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password">
  </div>
  
  <input type="submit" name="pass" class="btn btn-primary">
</form>
</div>

<?php
}
?>

<?php

if(isset($_POST['pass']))
{

$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];

if($op!=$d['pass'])
{
 echo "INCORRECT OLD PASSWORD";
}
else
{
    if($np!=$cnp)
    {
       echo "New Password and Old Password does not match";
    }
    else
    {
      $id=$d['ud'];
      include('dbcon.php');
      $qry="UPDATE `user1` SET `pass`='$np' WHERE `ud`='$id' ";
     $change=mysqli_query($con,$qry);
     if($change==TRUE)
     {
         echo "You have succesfully Changed your Password";
     }

    }
}



}

if(isset($_POST['plist']))
{

    
    include('dbcon.php');
    $y=$_SESSION['uid'];
    $a="SELECT * FROM `user1` WHERE `ud`='$y' ";
    $m=mysqli_query($con,$a);
    $t=mysqli_fetch_assoc($m);
    

    $product=$t['products_bought'];
    
    $arr=array();
											
											$arr=explode(".",$product);
                                            $un=array_unique($arr);
                                            
                                            ?>
                                            <h2 style="margin-left:80px;">List of Products Purchased :</h2>
                                            <?php

											foreach($un as $rt)
											{
												
											   
												$u="SELECT * FROM `products` WHERE `id`='$rt' ";
												$i=mysqli_query($con,$u);
												$z=mysqli_fetch_assoc($i);
												
										
											
                                               ?>








     
    <div class="container">
    
    <ul class="list-group">
    <li class="list-group-item"><?php echo $z['name']; ?>|| Brand : <?php echo $z['brand']; ?> || Price:<?php echo $z['price'];?> </li>
      
    </ul>
  </div>

<?php
                                            }                                      
}

?>



</body>

