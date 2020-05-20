<?php include("include/header.php") ?>
      <?php include("admin/include/connection.php");
 ?>   
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".dresses">Women</li>
                            <li data-filter=".bags">Men</li>
                            <li data-filter=".shoes">GIRL</li>
                            <li data-filter=".accesories">Boy</li>
                        </ul>
                    </div>
                </div>
            </div>
<div class="row"> 
                                            <?php
                            $query = "select * from product where cat_id={$_GET['id']} ";
                            $result = mysqli_query($conn,$query);
                            while($product=mysqli_fetch_assoc($result)){

                              ?>
                               
                                <div class="col-lg-4 col-sm-6" >
                    <img src='/care/admin/upload/product/<?php echo$product['pro_imge'] ?>' height='400' width='400'>
                                    <div class="box-text">
                                             <div class="product-text">
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "<a href='single-page.php?id={$product['pro_id']}'>{$product['pro_name']}</a>" ?></h6>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<a href='single-page.php?id={$product['pro_id']}'>{$product['pro_price']}$</a>" ?></p>
                        </div>
                                    </div>
                                </div>
                              <?php  } ?>    
                            </div>
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".dresses">Women</li>
                            <li data-filter=".bags">Men</li>
                            <li data-filter=".shoes">Girl</li>
                            <li data-filter=".accesories">Boy</li>
                        </ul>
                    </div>
                </div>
            </div>

            </div>
                </div>
            </section>
<?php include("include/footer.php") ?>