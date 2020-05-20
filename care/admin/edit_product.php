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
    $query = "delete from product where $id=pro_id";
    //to run the query
    mysqli_query($conn,$query);
    //relocate
    header("location:manage_product.php");
}
    $id   = 0;
    $name = '';
$password ='';
$fullname ='';

if (isset($_POST['update'])) {
    $id    =   $_POST['pro_id'];
    $name    =   $_POST['proname'];
    $price =  $_POST['proprice'];
    $image_name=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $path = 'upload/product/';
    move_uploaded_file($tmp_name,$path.$image_name);
    $desc =  $_POST['prodesc'];
    $catname =  $_POST['catname'];
    $query    =" update product set pro_id='$id',
                                    pro_name='$proname',
                                    pro_price = '$price',
                                    pro_imge='$image_name',
                                    pro_desc = '$desc',
                                    cat_id = '$catname' where pro_id=$id ";
    mysqli_query($conn , $query);

    header('location:manage_product.php');
}
$query = "select * from product where pro_id= {$_GET['pro_id']}";
$result = mysqli_query($conn , $query);
mysqli_fetch_assoc($result);


?>



