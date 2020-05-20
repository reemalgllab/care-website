      	<?php
                            $query = "select * from category";
                            $result = mysqli_query($conn,$query);
                            while($category=mysqli_fetch_assoc($result)){

                              ?>
                                    <img src='/care/admin/upload/category/<?php echo$category['cat_img'] ?>'>
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                         <?php  } ?>
                                    </div>
                                </div>
                            </div>

                            /////////////////////////////////////////////////////
                             <?php             
                            $query = "select * from product where cat_id={$_GET['id']} ";
                            $result = mysqli_query($conn,$query);
                            while($product=mysqli_fetch_assoc($result)){
                              ?>
                                <div class="col-lg-4 col-sm-6" >
                                <img src='/care/admin/upload/product/<?php echo$product['pro_imge'] ?>' height='400' width='400'>
                                    <div class="box-text">
   <?php echo "<a href='product-page.php?id={$product['pro_id']}'>{$product['pro_name']}</a>" ?> 
                                    </div>
                                </div>
                              <?php  } ?>
                              //////////////////////////////////////////////////
                              single-page.php
                              <?php include("include/header.php") ?>
<?php include("admin/include/connection.php");
?>   

<!-- Page Add Section Begin -->
  <!--   <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Shirts<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="product-control">
              <!--   <a href="#">Previous</a>
                <a href="#">Next</a> -->
            </div>
           >?php  session_start(); ?>

            <div class="row">
                
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
                    <p><?php echo "<div>{$product['pro_desc']}$</div" ?></div>
                        <ul class="tags">


                         <!--  <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li> -->
                     </ul>
                 <?php  } ?>   
                 <div class="product-quantity">
                    <div class="pro-qty">
                        <input type="text" value="1">
                    </div>
                </div>
                <a href="#" class="primary-btn pc-btn">Add to cart</a>
                       <!--  <ul class="p-info">
                            <li>Product Information</li>
                            <li>Reviews</li>
                            <li>Product Care</li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
           <!--  <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/products/img-1.jpg" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>Green Dress with details</h6>
                            <p>$22.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/products/img-3.jpg" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="img/products/img-4.jpg" alt=""></a>
                            <div class="p-status popular">popular</div>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$35.50</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>2019 Lookbook</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Our Franchising</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
         <div class="container">
            <div class="social-links">
               <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
               <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
               <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
               <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
               <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
               <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
           </div>
       </div>

       <div class="container text-center pt-5">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>

  </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>