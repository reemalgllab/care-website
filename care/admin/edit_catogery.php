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
    $query = "delete from category where $id=cat_id";
    //to run the query
    mysqli_query($conn,$query);
    //relocate
    header("location:manage_catogery.php");
}
?>
<?php

if (isset($_POST['update'])) {
    $id         = $_POST['cat_id'];
    $name       = $_POST['catname'];
    $image_name = $_FILES['catimg']['name'];
    $tmp_name   = $_FILES['catimg']['tmp_name'];
    $path = 'upload/category/';
  move_uploaded_file($tmp_name,$path.$image_name);

   $query = "UPDATE category SET cat_name ='$name', cat_img = '$image_name' 
WHERE cat_id = $id ";
      $result = mysqli_query($conn,$query);
   
       header("location:manage_catogery.php");
      }

      $query = "select * from category where cat_id= {$_GET['cat_id']}";
      $result = mysqli_query($conn , $query);
      mysqli_fetch_assoc($result);



?>
