
<?php

include("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up</title>

     <style>
@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;900&display=swap');


*{

margin: 0px;
padding: 0px;
box-sizing: border-box;
}


body{
font-family: 'Bodoni Moda', serif;
font-size: 1.2rem;

background-image: url("login.png");
background-size:50%;
background-repeat: no-repeat;
background-position: 240px;
}



     .container{ 
        background-color: white;

height: 562px;
width: 400px;
position: relative;
left: 460px;
gap: 10px;
border-left: 1px solid black;
border-right: 1px solid black;
                   position: relative;
                   left: 460px;
                   gap: 10px;
     }

     .ele{        position: relative;
        top: 30px;
                    display: flex;
                   align-items: center;
                   flex-direction: column;
                
     }

     h1{
                    margin-top: 10px;
                    margin-bottom: 30px;
     }
        input{
                    height: 50px;
                    width: 300px;
                    border: 1px solid black;
                    border-radius: 10px;
                    margin-bottom: 30px;
        }

        input[type="email"]{
                              color: black;
                              font-size: 1.1rem;
                              padding-left: 10px;


        }

        input[type="text"]{
                              color: black;
                              font-size: 1.1rem;
                              padding-left: 10px;


        }

        .pass{
                   font-size: 1.5rem;
                   padding-left: 10px;
        }

         #signinbtn{    background-color: rgba(255, 255, 255, 0.801);
                transition: all 0.2s ease-in-out;

         }
         #signinbtn[value="Sign Up"]{
                    font-size: large;
                    width: 100px;
                    position: relative;
                    left: 100px;
                     
         }


         #signinbtn:hover{
            transform: translateY(-5px);
       background-color: #131212;
       color: white;
       border-radius: 10px;
     
         }

        ::placeholder{ 

             font-size: 1rem;
             padding-left: 10px;

        }

     </style>



</head>
<body>
 
 <script>

window.alert("Fill All Details Carefully")

 </script>




    <div class="container">

        <div class="ele">

            <h1> Sign Up </h1>
            <form action="" method="POST" autocomplete="off">

            <input type="text" placeholder="Enter Your Full Name" name="name" required oninvalid="this.setCustomValidity('Enter Your Name')">
             <br>
           

            <input type="email" placeholder="Enter Your Gmail" name="email" required oninvalid="this.setCustomValidity('Enter email address')">
             <br> 
             <input class="pass" type="password" placeholder="Create Password" name="password" required oninvalid="this.setCustomValidity('Enter Password')">
            <br>
            <input class="pass" type="password" placeholder="Confirm Password" name="cpassword" required oninvalid="this.setCustomValidity('Enter Password')">
            <br>
 
             <input id="signinbtn" type="submit" value="Sign Up" name="submit">

            </form>

        </div>
       


    </div>
    
       


</body>
</html>

<?php


if($_POST['submit']){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password==$cpassword){


    $query = "INSERT INTO signup VALUES('$name','$email','$password','$cpassword')";

    $data = mysqli_query($conn,$query);
    
 
}else{

    header("Location: extrafile.php");

     
}


if($data){
    
    header("Location: app.php");

}
else{
    echo "";
}

}



?>