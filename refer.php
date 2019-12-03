
                     

                     <?php
							 
							 if(isset($_POST["buy"])){
								 
                               $op=$_POST['hide'];
                               $quant=$_POST['quantity'];
                               
								?> 
                        <script> window.location="checkout.php?rat=<?php echo $op;?>&mat=<?php echo $quant ;?>"; </script>
								
                                
                            
                             <?php
							 }
							 

							 
							?>