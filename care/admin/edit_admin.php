<?php
$conn = mysqli_connect("localhost","root","","care");
if(!$conn){
    die("cannot connect to server");
}

//when i press the delete button
if(isset($_GET['delete'])){
    //to get the number of id from the url and store it n $id
    $id=$_GET['delete'];
    //delete query
    $query = "delete from admin where $id=admin_id";
    //to run the query
    mysqli_query($conn,$query);
    //relocate
    header("location:manage_admin.php");
}
    $id   = 0;
    $name = '';
$password ='';
$fullname ='';

if (isset($_POST['update'])) {
    $id       = $_POST['admin_id'];
    $fullname = $_POST['fullname'];
    $email    = $_POST['admin_email'];
    $password = $_POST['admin_passsword'];
    $image_name=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path = 'upload/';
    move_uploaded_file($tmp_name,$path.$image_name);
    $query    =" update admin set admin_id='$id' ,admin_email='$email' ,admin_passward='$password',full_name='$fullname' , admin_img ='$image_name'
    where admin_id=$id ";
    mysqli_query($conn , $query);

    header('location:manage_admin.php');
}
$query = "select * from admin where admin_id= {$_GET['admin_id']}";
$result = mysqli_query($conn , $query);
mysqli_fetch_assoc($result);


?>


