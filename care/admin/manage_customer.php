<?php include("include/header.php"); 
include("include/connection.php");
if(isset($_POST['submit'])){
     $name    =   $_POST['name'];
    $email    =   $_POST['email'];
    $password =  $_POST['passsword'];
    $mobile =  $_POST['mobile'];
    $address =  $_POST['address'];

    $query ="insert into customer(customer_name,customer_email,customer_passward,mobile ,address)
    values('$name','$email','$password','$mobile','$address')";
    $query_run=mysqli_query($conn,$query);
    header('location:manage_customer.php');
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
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="edit_customer.php" enctype="multipart/form-data">
                 <input type="hidden" id='update_id' name="customer_id"  class="form-control" >
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Customer Name (required) </label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="update_name" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">customer email (required)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_email" type="email" name="email" required    />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">customer password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_password" type="password" 
                      name="passsword" />
                    </div>
                  </div>
                 <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">mobile</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_mobile" type="text" name="mobile"   />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">address</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="update_address" type="text" name="add"   />
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
                 <h4><i class="fa fa-angle-right"></i> Manage Customer</h4>
                 <br>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2"> Customer Name (required)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="Aname" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Admin E-Mail (required)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Aemail" type="email" name="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Apassward" type="password" name="passsword" />
                    </div>
                  </div>
                       <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">mobile</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="mobile" type="text" name="mobile" />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">address</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="address" type="text" name="address" />
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
              <h4><i class="fa fa-angle-right"></i> customer Table</h4>
              <hr>
              <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Passward</th>
                    <th>Mobile</th>
                    <th>address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                  <?php 
                            $query = "select * from customer";
                            $result = mysqli_query($conn,$query);
                            while($customer=mysqli_fetch_assoc($result)){
                              ?>
                              <tr>

                                <td><?php echo $customer['customer_id'] ?></td>
                                <td><?php echo $customer['customer_name'] ?></td>
                                <td><?php echo $customer['customer_email'] ?></td>
                                <td><?php echo $customer['customer_passward'] ?></td>
                                <td><?php echo $customer['mobile'] ?></td>
                                <td><?php echo $customer['address'] ?></td>
                                <td><?php echo "<button class='edit btn btn-info editbtn'
                                  data-id='{$customer['customer_id']}'
                                  data-name='{$customer['customer_name']}' 
                                  data-email='{$customer['customer_email']}'
                                 data-passwoard='{$customer['customer_passward']}'
                                 data-mob='{$customer['mobile']}'  
                                 data-address='{$customer['address']}' 
                                 >Edit</button>"?></td>

                        <td> <?php echo "<a href='edit_customer.php?delete={$customer['customer_id']}' name='delete' class='btn btn-danger' >delete</a> " ?> </td>


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
                var email= $(this).attr('data-email');
                var pass = $(this).attr('data-passwoard');
                var mobile = $(this).attr('data-mob');
                var address = $(this).attr('data-address');

                $('#myModal').modal('show');
                 $('#update_id').val(id);
                $('#update_name').val(name);
                $('#update_email').val(email);
                $('#update_password').val(pass);
                 $('#update_mobile').val(mobile);
                 $('#update_address').val(address);
            });
        });

    </script>
<?php include("include/footer.php") ?>
