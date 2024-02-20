

<?php

include("connection.php");

session_start();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>

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

     }

     .ele{        position: relative;
        top: 30px;
                    display: flex;
                   align-items: center;
                   flex-direction: column;
                
     }

     h1{
                    margin-top: 60px;
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

         #signinbtn{    background-color: rgba(255, 255, 255, 0.801);
                transition: all 0.2s ease-in-out;

         }
         #signinbtn[value="Login"]{
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

        .password{
                     font-size: 1.5rem;
                     padding-left: 10px;
        }

        .newacc{
                       display: flex;
                       flex-direction: column;
                       gap: 10px;
                       align-items: center;
        }

        h5{
             font-weight: 100;
             font-size: 1.1rem;
        }

        a{
             color: black;
        }

     </style>



</head>
<body>
 




    <div class="container">

        <div class="ele">

            <h1>  Login </h1>
            <form action="" method="post">

            <input type="email" placeholder="Enter Your Gmail" name="email" required oninvalid="this.setCustomValidity('Enter email address')">
             <br>
            <input class="password" type="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Enter Password')">
            <br>
 
             <input id="signinbtn" type="submit" value="Login" name="submit" onclick="myfunction()">

              <div class="newacc">

             <h5>Create A New Account</h5> 
             <a href="signup.php">Sign Up</a>

              </div>
            </form>

        </div>
       


    </div>
    
       

</body>
</html>

<?php 



if($_POST['submit']){

     $email = $_POST['email'];
     $password = $_POST['password'];
     
     $query = "SELECT * FROM signup WHERE email ='$email' && password='$password'";
     
     $data = mysqli_query($conn,$query);

     $total = mysqli_num_rows($data);
  

     if($total == 1){

          echo '<script>   alert("Welcome To Dashboard"); 
          window.location.href = "app.php";

          </script>';
         }
 
       

        else{
          echo '<script>   alert(" Incorrect Details , Please Check Your Details Otherwise Create A New Account");
          window.location.href = "login.php";

          </script>';


        }
    

     
    
}
?>

