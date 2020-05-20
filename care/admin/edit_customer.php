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
    $query = "delete from customer where $id=customer_id";
    //to run the query
    mysqli_query($conn,$query);
    //relocate
    header("location:manage_customer.php");
}
    $id   = 0;
    $name = '';
$password ='';
$fullname ='';

if (isset($_POST['update'])) {
    $id = $_POST['customer_id'];
    $name    =   $_POST['name'];
    $email    =   $_POST['email'];
    $password =  $_POST['passsword'];
    $mobile =  $_POST['mobile'];
    $address =  $_POST['add'];

    $query    =" update customer set customer_id='$id',customer_name='$name',customer_email='$email',customer_passward='$password',   mobile='$mobile',address='$address' 
    where customer_id=$id ";
    mysqli_query($conn , $query);

    header('location:manage_customer.php');
}
$query = "select * from customer where customer_id= {$_GET['customer_id']}";
$result = mysqli_query($conn , $query);
mysqli_fetch_assoc($result);


?>


