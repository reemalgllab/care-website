<?php include("include/header.php"); 
include("include/connection.php");
if(isset($_POST['submit'])){

    $email    =   $_POST['admin_email'];
    $password =  $_POST['admin_passsword'];
    $fullname =  $_POST['fullname'];
    $image_name=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path = 'upload/admin/';
    move_uploaded_file($tmp_name,$path.$image_name);

    $query ="insert into admin(admin_email,admin_passward,full_name,admin_img)
    values('$email','$password','$fullname','$image_name')";
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
                      <h4 class="modal-title" id="myModalLabel">update admin</h4>
                    </div>
                    <div class="modal-body">
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="edit_admin.php" enctype="multipart/form-data">
                 <input type="hidden" id='update_id' name="admin_id"  class="form-control" value="<?php echo $admin['admin_id'] ?>">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Admin Name </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="update_fullname" name="fullname" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Admin E-Mail </label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_email" type="email" name="admin_email" required    />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_passsword" type="password" name="admin_passsword"   />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Admin Image</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_img" type="file" name="img"  />
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
                 <h4><i class="fa fa-angle-right"></i> Manage Admin</h4>
                 <br>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Admin Name (required)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Aname" name="fullname" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Admin E-Mail (required)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Aemail" type="email" name="admin_email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Apassward" type="password" name="admin_passsword" />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Admin Image</label>
                    <div class="col-lg-10">
                      <input class="form-control "  type="file" name="img" />
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passward</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                            $query = "select * from admin";
                            $result = mysqli_query($conn,$query);
                            while($admin=mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                <td><?php echo $admin['admin_id'] ?></td>
                                <td><?php echo $admin['full_name'] ?></td>
                                <td><?php echo $admin['admin_email'] ?></td>
                                <td><?php echo $admin['admin_passward'] ?></td>
                                 <td><img src="upload/admin/<?php echo$admin['admin_img'] ?>" width="100" height="100" ></td>
                             <td> <?php echo "<button class='edit btn btn-info editbtn'
                                  data-id='{$admin['admin_id']}'
                                  data-email='{$admin['admin_email']}' 
                                  data-password='{$admin['admin_passward']}'
                                 data-fullname='{$admin['full_name']}' 
                                 data-image='upload/admin/{$admin['admin_img']}' >Edit</button>"?> </td>

                               <td> <?php echo "<a href='edit_admin.php?delete={$admin['admin_id']}' name='delete' class='btn btn-danger' >delete</a> " ?> </td>


                              </tr>
                            <?php  } ?>
                               <!--  echo "<tr>";
                                echo "<td>{$admin['admin_id']}</td>"; 
                                echo "<td>{$admin['full_name']}</td>";
                                echo "<td>{$admin['admin_email']}</td>"; 
                                echo "<td>{$admin['admin_passward']}</td>";
                               echo "<td>upload/<?php //echo $admin['admin_img'] ?> </td>"
                                echo "<td><img src='upload/<?php //echo $admin['admin_img']  ?>' width='100' height='100'  />
                                </td>";
                                  echo "<td><img src='upload/watches.jpg' width='100' height='100'  />
                                </td>";
                                echo "<td><button class='edit btn btn-info editbtn'
                                  data-id='{$admin['admin_id']}'
                                  data-email='{$admin['admin_email']}' 
                                  data-password='{$admin['admin_passward']}'
                                 data-fullname='{$admin['full_name']}' 
                                 data-image='{$admin['admin_img']}' >Edit</button></td>";

                                echo "<td><a href='edit_admin.php?delete={$admin['admin_id']}' name='delete' class='btn btn-danger' >delete</a></td>";

                                echo "</tr>";  -->
                           <!--  } -->
                          
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
                var email = $(this).attr('data-email');
                var password= $(this).attr('data-password');
                var name = $(this).attr('data-fullname');
                 var img = $(this).attr('data-image');

                $('#myModal').modal('show');
                 $('#update_id').val(id);
                $('#update_email').val(email);
                $('#update_passsword').val(password);
                $('#update_fullname').val(name);
                 $('#update_img').val(img);
            });
        });

    </script>
<?php include("include/footer.php") ?>
