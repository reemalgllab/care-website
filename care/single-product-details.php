<?php
require ("admin/includes/connection.php");
 include ("includes/header.php");
?>
    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <?php
         $query="SELECT * FROM product WHERE id={$_GET['product_id']}";
         $result= mysqli_query($conn,$query);
         $productSet=mysqli_fetch_assoc($result);
       echo "<div class='single_product_thumb clearfix my-2'>
            <div class='product_thumbnail_slides owl-carousel'>
                <img src='admin/{$productSet['product_img']}' alt='{$productSet['product_name']} image'>
                <img src='admin/{$productSet['product_img']}' alt='{$productSet['product_name']} image'>
                <img src='admin/{$productSet['product_img']}' alt='{$productSet['product_name']} image'>
            </div>
        </div>

        <!-- Single Product Description -->
        <div class='single_product_desc clearfix'>
            <span>{$productSet['brand_name']}</span>
            <a href='cart.html'>
                <h2>{$productSet['product_name']}</h2>
            </a>
            <p class='product-price'><!--<span class='old-price'>$65.00</span>--> &dollar;{$productSet['product_price']}</p>
            <p class='product-desc'>&dollar;{$productSet['product_description']}.</p>

            <!-- Form -->
            <form class='cart-form clearfix' method='post'>
                <!-- Cart -->
                 <input  name='product_id' type='hidden' value='{$_GET['product_id']}'>
                    <button type='submit' name='addtocart' class='btn essence-btn'>Add to cart</button>
                </div>
            </form>
        </div>";
  
    ?>
    </section>
    <!-- ##### Single Product Details Area End ##### -->
        <?php include ("includes/footer.php");?>
