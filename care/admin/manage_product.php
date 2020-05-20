<?php include("include/header.php"); 
include("include/connection.php");
if(isset($_POST['submit'])){

    $name    =   $_POST['proname'];
    $price =  $_POST['proprice'];
    $image_name=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path = 'upload/product/';
    move_uploaded_file($tmp_name,$path.$image_name);
    $desc =  $_POST['prodesc'];
    $cat =  $_POST['catname'];

    $query = "INSERT INTO product(pro_name,pro_price,pro_imge,pro_desc,cat_id)
VALUES ('$name','$price','$image_name','$desc','$cat')";
    $query_run=mysqli_query($conn,$query);
    header('location:manage_product.php');
  }
?>
<!--  MODALS -->
            <div class="showback">
              
              <div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">update product</h4>
                    </div>
                    <div class="modal-body">
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="edit_product.php" enctype="multipart/form-data">
                 <input type="hidden" id='update_id' name="pro_id"  class="form-control" >
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> product Name </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="update_name" name="proname" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">product price </label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_price" type="text" name="proprice" required    />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">product image</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_img" type="file" name="img"  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">product description</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_desc" type="text" name="prodesc"   />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Category Name</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_catname" type="text" name="catname"   />
                    </div>
                  </div>
              
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name='update'>Save changes</button>
                    </div>
                  </div>
                </div>
                  </form>
              </div>
            </div>
            <!-- /showback -->
 <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
<!-- /row -->
        <!-- FORM VALIDATION -->
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form"  method="post" action="" enctype="multipart/form-data">
                 <h4><i class="fa fa-angle-right"></i> Manage product</h4>
                 <br>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Product Name (required)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="proname" name="proname" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">product price </label>
                    <div class="col-lg-10">
                      <input class="form-control " id="proprice" type="text" name="proprice" required />
                    </div>
                  </div>
                  
                   <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">product image</label>
                    <div class="col-lg-10">
                      <input class="form-control "  type="file" name="img" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">product description</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="prodesc" type="text" name="prodesc" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="curl" class="control-label col-lg-2">catugary name</label>
                <div class="col-lg-10">
                   <select name="catname" id="catname" class="form-control">
                         

                                            <?php
                                                //get data from category
                                                $query = "select *from category";
                                                $result = mysqli_query($conn , $query);
                                                while ($category = mysqli_fetch_assoc($result)) 
                                                {
                  echo "<option value ='{$category['cat_id']}'>{$category['cat_name']}</option>";
                                                }

                                            ?>
                                        </select>
              
              </div>
            </div>
            </div>
        
    </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
 
        
          <div class="col-lg-12 main-chart">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Admin Table</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th> price</th>
                     <th>description</th>
                     <th> Category Name</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                            $query = "select * from  product inner join category on category.cat_id=product.cat_id";
                            $result = mysqli_query($conn,$query);
                            while($product=mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                        
                                <td><?php echo $product['pro_id'] ?></td>
                                <td><?php echo $product['pro_name'] ?></td>
                                <td><?php echo $product['pro_price'] ?></td>
                                <td><?php echo $product['pro_desc'] ?></td>
                                <td><?php echo $product['cat_name'] ?></td>
                                 <td><img src="upload/product/<?php echo$product['pro_imge'] ?>" width="100" height="100" ></td>
                             <td> <?php echo "<button class='edit btn btn-info editbtn'
                                  data-id='{$product['pro_id']}'
                                  data-name='{$product['pro_name']}' 
                                  data-price='{$product['pro_price']}'
                                 data-desc='{$product['pro_desc']}' 
                                 data-catname='{$product['cat_name']}' 
                                 data-image='upload/product/{$product['pro_imge']}' >Edit</button>"?> </td>

                               <td> <?php echo "<a href='edit_product.php?delete={$product['pro_id']}' name='delete' class='btn btn-danger' >delete</a> " ?> </td>


                              </tr>
                            <?php  } ?>
                          
                          
                </tbody>
              </table>
            </div>
          </div>
         </div>
          <!-- /col-lg-12 -->
      </section>
  </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
        $(document).ready(function()
        {
            $('.editbtn').click(function()
            {
                var id = $(this).attr('data-id');
                var name = $(this).attr('data-name');
                var price= $(this).attr('data-price');
                var desc = $(this).attr('data-desc');
                var img = $(this).attr('data=data-image');
                var catname= $(this).attr('data-catname');

                $('#myModal').modal('show');
                 $('#update_id').val(id);
                $('#update_name').val(name);
                $('#update_price').val(price);
                $('#update_desc').val(desc);
                 $('#update_img').val(img);
                 $('#update_catname').val(catname);
            });
        });

    </script>
<?php include("include/footer.php") ?>
