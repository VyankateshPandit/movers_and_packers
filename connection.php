
<?php

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "move";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn){
    //  echo "done";
}
else{
     echo "failed".mysqli_connect_error();
}

?>