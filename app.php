<?php
 session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;900&display=swap');

*{
     box-sizing: border-box;
     margin: 0%;
     padding: 0%;
     font-family: 'Bodoni Moda'sans-serif;
}

span{
     font-size: 1.5rem;
     border: 1px solid white;
     padding: 5px;
     border-radius: 10px;
     
}


nav{
     background-color: black;
     width:1351px ;
     height: 70px;
     color: white;
     display: flex;
     flex-direction: row;
     padding: 20px;
     align-items: center;
     justify-content: space-between;
}


a{
      text-decoration: none;
      color: white;
      font-size: 1.5rem;
      transition: all 0.2s ease-in-out;
      
}

a:hover{
           transform: translateY(10px);
}


i{
      font-size: large;
      margin: 5px;
}

.account{border-radius: 10px;
     border: 1px solid black;
     padding: 5px;
           transition: all 0.2s ease-in-out;
}

.account:hover{
     border-radius: 10px;
            border: 1px solid white;
            transform: translateY(0px);
            padding: 5px;
            color:black;
            background-color: white
            ;

}

.container{
          display: flex;
          flex-direction: row ;
          margin: 30px;
          /* gap: 50px; */
          align-items: center;
          justify-content: center;

}

h2{
     background-color: rgba(56, 56, 56, 0.062);
     color: black;
     padding: 10px;
     width: fit-content;
     border-radius: 10px;
}

.cus_det_2{
                 display: flex;
                 flex-direction: column;
                 width: 400px;
                 gap: 27px;     
                 border-right: 1px solid rgba(112, 111, 111, 0.589);
                 height: 400px;  
                 overflow-y: scroll;     
                 padding: 20px;
   

}
.cus_det_2::-webkit-scrollbar{
     width: 5px;
     background-color: white;
}

.cus_det_2::-webkit-scrollbar-thumb{
     background-color: black;
     border-radius: 100px;
}



.cus_det{
          display: flex;
          flex-direction: row;
       
           height: fit-content;      
          gap: 27px;     
          width: fit-content;
          border: 1px solid rgba(112, 111, 111, 0.589);
          padding: 20px;

}


.cus_det > input{
      border: 1px solid rgba(43, 42, 42, 0.404);
      border-radius: 5px;

      width: 350px;
      height: 80px;


}

.cus_det::-webkit-scrollbar{
     width: 5px;
     background-color: white;
}

.cus_det::-webkit-scrollbar-thumb{
     background-color: black;
     border-radius: 100px;
}


input::placeholder{
     font-size: 1rem;
     padding: 5px;
}

input:hover{ 
     box-shadow:  0 1px 1px 0 rgba(100, 100, 100, 0.397);
}

input{
           font-size: 1rem;
           padding: 10px;
}

.items{
     width: fit-content;
     display: flex;
     flex-direction: column;
     gap: 10px;
     border-right: 1px solid rgba(112, 111, 111, 0.589);

     padding: 20px;
     overflow-y: scroll;    
           height: 400px; 


}




.items > input{
     align-self: flex-end;
     position: relative;
     top: 25px;
     cursor: pointer;
}

.items > label{
     align-self: flex-start;
     font-size: 1.1rem;

}

.items::-webkit-scrollbar{
      width: 5px;
      background-color: white;
}

.items::-webkit-scrollbar-thumb{
      background-color: black;
      border-radius: 100px;
}

.btn{ 

       background-color: white;
       border: 1px solid black;
       border-radius: 10px;
       width: fit-content;
       transition: all 0.2s ease-in-out;
       margin-bottom: 20px;
       cursor: pointer;
       
}

.btn:hover{

     background-color: black;
     color: white;

}


input[type='text']{
     border: 1px solid rgba(43, 42, 42, 0.404);
     border-radius: 5px;
}


</style>
</head>
<body>
    <script src="https://kit.fontawesome.com/bb164264f5.js" crossorigin="anonymous">

    </script>


    <script> 
    
    
        window.alert("Welcome To Dashboard"); 

    
    
    
    function myfunction(){

        confirm("This Feature is Coming Soon");
      
    }

   
    
    </script>
           
    

           <nav>

             <span>Movers & Packers</span>
             
            <a href="#"> <i class="fa-solid fa-house"></i>
                Home</a>
            <a href="services.html"> <i class="fa-solid fa-screwdriver-wrench"></i> Services</a>
            <a href="#premium" onclick="myfunction()"><i class="fa-solid fa-crown" ></i> Premium</a>
            <a href="contact.php"><i class="fa-solid fa-phone"></i>Contact Us</a>
            <a class="account" href="logout.php"><i class="fa-solid fa-user"></i>  Logout</a>
           </nav>

           <div class="container">

            <form action="cusdet.php" method="post" autocomplete="off">

 
             <section class="cus_det">


                <div class="cus_det_2">


                 <h2>Customer Info</h2>


                <input type="text" placeholder="Full Name " name="fname" required>

                <input type="text" placeholder="Email ID " name="email" required>

                <input type="text
                " placeholder="Contact Number " name="cno" required>


                <input type="text" placeholder="Building Details" name="bdet" required>
                <input type="text" placeholder="Complete Address " name="cadd" required>
                <input type="text" placeholder="City" name="cname" required>


                <input type="text" placeholder="Pincode" name="pcode" required>


                </div>




                 <section class="items">




                    <h2>Select Your Items</h2>
   
                    <input type="checkbox" name="item[]" value="TV"> <label>TV</label> 
   
                    <input type="checkbox" name="item[]" value="Sofa"> <label>Sofa</label> 
   
                    <input type="checkbox" name="item[]" value="Table"> <label>Table</label> 
   
                    <input type="checkbox" name="item[]" value="Other Furniture"> <label>Other Furniture</label> 
   
                    <input type="checkbox" name="item[]" value="All Kitchen Applience"> <label>All Kitchen Applience</label> 
   
                    <input type="checkbox" name="item[]" value="All bedroom Applience"> <label>All bedroom Applience</label> 
   
                    <input type="checkbox" name="item[]" value="Bathroom Applience"> <label>Bathroom Applience</label> 
   
                    <input type="checkbox" name="item[]" value="Groceries"> <label>Groceries</label> 
   
                    <input type="checkbox" name="item[]" value="Goods"> <label>Goods</label> 
   
                    <input type="checkbox" name="item[]" value="Storage "> <label>Storage</label> 


                    <input class="btn" type="submit" value="Book Now" name="submit">

                </form>


             </section>


   
             </section>





           </div>


</body>
</html>


