<?php
include("db.php");

if(isset($_POST['save_task'])){
    $title= $_POST['title'];
    $description= $_POST['description'];
    $query= "INSERT INTO task(title,description) VALUES('$title','$description')";
    $res=mysqli_query($conn,$query);
    if(!$res){
        die("ERROR-->query fail");
    }
    
    $_SESSION['message']="Taks Saved succesfully";
    $_SESSION['message_type']="success";

    header("location: index.php");

}
