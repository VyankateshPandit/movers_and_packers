<?php 
include("connection.php");



if($_POST['submit']){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cno = $_POST['cno'];
    $bdet = $_POST['bdet'];
    $cadd = $_POST['cadd'];
    $cname = $_POST['cname'];
    $pcode = $_POST['pcode'];

    $query = "INSERT INTO cusdet VALUES('$fname','$lname','$cno','$hno','$cadd','$cname','$pcode')";
    
    $data = mysqli_query($conn,$query);
    
    if($data){
        
        header("Location: app.html");
    
    }
    else{
        echo "";
    }
    
    }
    



?>