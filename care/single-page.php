<?php include("include/header.php") ?>
<?php include("admin/include/connection.php");
?>   
    <section class="product-page">
        <div class="container">
            <div class="product-control">
            </div>
            <div class="row">
                <form action="login_customer.php" method="post">
                    <div class="row"> 
                        <?php
                        $query = "select * from product where pro_id={$_GET['id']} ";
                        $result = mysqli_query($conn,$query);
                        while($product=mysqli_fetch_assoc($result)){

                          ?>
                          
                          <div class="col-lg-6">

                <div class="product-content">
                    <div class="col-lg-8 " >
                <img src='/care/admin/upload/product/<?php echo$product['pro_imge'] ?>' height='400' width='1000'>
            </div>
            </div>
        </div>
            <div class="col-lg-6">
                <div class="product-content">

                    <h2><?php echo "<div>{$product['pro_name']}</div>" ?></h2>
                    <div class="pc-meta">
                        <h5><?php echo "<div>price : {$product['pro_price']}$</div>" ?></h5>
                    </div>
                    <p><?php echo "<div>{$product['pro_desc']}</div" ?></div>
                        <ul class="tags">
                     </ul>
                 <?php  } ?> 
                  <?php
$query = "select * from product where pro_id={$_GET['id']} ";
$result = mysqli_query($conn,$query);
while($product = mysqli_fetch_assoc($result)){ 
    ?>
                 <div class="product-quantity">
                    <label>Quantity</label>
                


                <input type="text" name="qty" class="form-control col-lg-6">
                <br>
                <br>
    <input type="hidden" name="name" value="<?php echo "{$product['pro_name']}"?>">
                <input type="hidden" name="price" value="<?php echo "{$product['pro_price']}"?>">
                <a href=""><input type="submit"  name="addcart" class="primary-btn pc-btn" value="Add to cart"></div>
                    </div>
                </div>
            </div>
        </div>  
<?php  } ?>
    </section>
    <section class="related-product spad">
        <div class="container">
            </div>
        </div>
    </section>
    </form>
<?php include("include/footer.php") ?>
    