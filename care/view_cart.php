<?php include("include/header.php") ?>
<?php include("admin/include/connection.php");
?>
<?php
session_start();
if(!isset($_SESSION['customer_id'])){
    header("location:login_customer.php");
}

?>
<h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Cart Product </h1>
 
 <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-info">
                            <div class="total-table">
                                <table>
                                    <thead>
                                        <tr>
                                        	<th>num</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>quantity</th>
                                            <th >Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                     $bill = 0;
                                     $sno = 1 ;
                                  
                                     foreach($_SESSION as $products){
                                     	//print_r($products);
                                     	$p = 0;
                                     	$q = 0; 
                                     	$total=0;
                                     	echo "<tr>";
                                     	echo "<td>".($sno++)."</td>";

                                     foreach($products as $key=> $value){
                                     	//print_r($products);
                                     	      if($key == 2){
                                     		echo "<td>".$value."</td>";
                                     		$q=$value;
                                     	}else if ($key == 1) {
                                     		echo "<td>".$value."$</td>";
                                     		$p=$value;
                                     	}else if ($key == 0) {
                                     		echo "<td>".$value."</td>";	
                                        }

                                    }
                                    $bill =($q * $p);
                                      echo "<td>".$bill."$</td>";
                                    
                                        echo "</tr>";
                                    }
                                    $total=$total+$bill;
                                    echo "<tr>";
                                    echo "<td></td>";
                                     echo "<td></td>";
                                      echo "<td></td>";
                                       echo "<td></td>";
                                      
                                      
                                        echo "<td>Total Price : ".$total."</td>";
                                    echo "</tr>";
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






















  <?php include("include/footer.php") ?>