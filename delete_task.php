<?php
include('db.php');

if(isset($_GET['id'])){

    $id=$_GET['id'];
    $query="DELETE FROM task where id= $id";
    $res= mysqli_query($conn,$query);

    if(!$res){
        die("query failed");
    }

    $_SESSION['message']="Task Removed succesfully";
    $_SESSION['message_type']= "danger";
    header("location:index.php");
}