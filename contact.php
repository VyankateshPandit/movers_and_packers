<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>  @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;900&display=swap');

    
    
    *{
        box-sizing: border-box;
        margin: 0%;
        padding: 0%;
        font-family: 'Bodoni Moda'sans-serif;
   }

                    body{
                         display: flex;
                         flex-direction: column;
                         align-items: center;
                         justify-content: center;
                        
                    }

                 

            input[type=text], textarea {
              width: 100%; 
              padding: 12px; 
              border: 1px solid rgba(43, 42, 42, 0.404);
              border-radius: 4px; 
              box-sizing: border-box; 
              margin-top: 6px; 
              margin-bottom: 16px; 
              resize: vertical ;

            }
            
            input[type=submit] {
              background-color: white;
              color: black;
              padding: 12px 20px;
              font-size: 0.8rem;
              font-weight: 500;
              border: 1px solid rgba(43, 42, 42, 0.404);
              border-radius: 4px;
              cursor: pointer;
              font-size: large;
            }
            
            input[type=submit]:hover {
              background-color: black;
              color: white;
              font-size: large;
            }
            
            .container {
              border-radius: 5px;
              border: 1px solid rgba(112, 111, 111, 0.589);
              padding: 20px;
              width: 600px;
            
            }

             label{
               
             
                   color: black;
                   padding: 10px;
                   width: fit-content;
                   border-radius: 5px;
                   font-size:medium;
             }


             h1{
                
                   background-color: rgba(56, 56, 56, 0.062);
                   color: black;
                   padding: 10px;
                   width: fit-content;
                   border-radius: 10px;
                   font-size:large;
                   margin: 10px;
                }

                .btn{
                               display:flex;
                               flex-direction: row;
                               justify-content: space-between;
                }
    </style>


</head>
<body>
    
     <h1>Contact Us</h1>


    <div class="container">
        <form action="" method="post" autocomplete="off">
      
          <label for="fname">Enter Your  Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your Full Name...">
      
          <label for="lname">Email ID</label>
          <input type="text" id="lname" name="email" placeholder="Email ID">
      
      
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      
          <div class="btn">
          <input type="submit" value="Submit" name="submit">
          <a href="app.php"><input type="submit" value="Go Back" name="submit"></a>

          </div>
       
      
        </form>
      </div>
      


</body>
</html>


<?php 
include("connection.php");



if($_POST['submit']){

  $name = $_POST['fname'];
 $email = $_POST['email'];
$message = $_POST['subject'];




 $query = "INSERT INTO contactus VALUES('$name','$email','$message')";
 
 $data = mysqli_query($conn,$query);


if($data){
 
 header("Location: app.php");

}
else{
 echo "";
}

}


?>