<?php 
include("connection.php");




if($_POST['submit']){

     $name = $_POST['name'];
    $items = $_POST['item'];
    $item = implode(",",$items);





    $query = "INSERT INTO items VALUES('$name','$item')";
    
    $data = mysqli_query($conn,$query);


if($data){
    
    header("Location: app.php");

}
else{
    echo "";
}

}



?>