<?php include("include/header.php"); 
include("include/connection.php");

if(isset($_POST['submit'])){

    $name  =   $_POST['name'];
    $image_name=$_FILES['cimage']['name'];
    $tmp_name=$_FILES['cimage']['tmp_name'];
    $path = 'upload/category/';
    move_uploaded_file($tmp_name,$path.$image_name);

    $query ="insert into category(cat_name,cat_img )
    values('$name','$image_name')";
    $query_run=mysqli_query($conn,$query);
    header('location:manage_admin.php');
  }
?>
<!--  MODALS -->
            <div class="showback">
              
              <div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">update catogery</h4>
                    </div>
                    <div class="modal-body">
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="edit_catogery.php" enctype="multipart/form-data">
                 <input type="hidden" id='update_id' name="cat_id"  class="form-control" >
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> catogery Name </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="update_name" name="catname" minlength="2" type="text" required />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">catogery Image</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_img" type="file" name="catimg"  />
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
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart">
<!-- /row -->
        <!-- FORM VALIDATION -->
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="" enctype="multipart/form-data">
                 <h4><i class="fa fa-angle-right"></i> Manage Catogery </h4>
                 <br>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Catogery Name(required)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Catogery image (required)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cimg" type="file" name="cimage" required />
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
              <h4><i class="fa fa-angle-right"></i> Catogery Table</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Catogery Name</th>
                    <th>Catogery image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
                            $query = "select * from category";
                            $result = mysqli_query($conn,$query);
                            while($category=mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                <td><?php echo $category['cat_id'] ?></td>
                                <td><?php echo $category['cat_name'] ?></td>
                                 <td><img src="upload/category/<?php echo$category['cat_img'] ?>" width="100" height="100" ></td>
                             <td> <?php echo "<button class='edit btn btn-info editbtn'
                                  data-id='{$category['cat_id']}'
                                  data-name='{$category['cat_name']}' 
                                 data-image='upload/Catogery/{$category['cat_img']}' >Edit</button>"?> </td>

                               <td> <?php echo "<a href='edit_catogery.php?delete={$category['cat_id']}' name='delete' class='btn btn-danger' >delete</a> " ?> </td>


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
                var image= $(this).attr('data-image');
               

                $('#myModal').modal('show');
                 $('#update_id').val(id);
                $('#update_name').val(name);
                 $('#update_img').val(image);
            });
        });

    </script>


<?php include("include/footer.php"); ?>