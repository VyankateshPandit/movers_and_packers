<?php 
include("connection.php");




if($_POST['submit']){

    $items = $_POST['item'];
    $item = implode(",",$items);





    $query = "INSERT INTO items VALUES('$item')";
    
    $data = mysqli_query($conn,$query);


if($data){
    
    header("Location: app.html");

}
else{
    echo "";
}

}



?>