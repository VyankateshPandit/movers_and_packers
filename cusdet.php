<?php 
include("connection.php");


session_start();


$email=$_SESSION['email'];

if($email==true){
     
}
else{
    header("Location: login.php");

}


if($_POST['submit']){

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $cno = $_POST['cno'];
    $bdet = $_POST['bdet'];
    $cadd = $_POST['cadd'];
    $cname = $_POST['cname'];
    $pcode = $_POST['pcode'];

    $query = "INSERT INTO cusdet VALUES('$fname','$email','$cno','$hno','$cadd','$cname','$pcode')";
    
    $data = mysqli_query($conn,$query);
    
    if($data){
        
        header("Location: app.php");
    
    }
    else{
        echo "";
    }
    
    }
    



?>