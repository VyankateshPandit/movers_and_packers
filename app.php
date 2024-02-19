


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="app.css">


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
            <a class="account" href="logout.php"><i class="fa-solid fa-user"></i>  Your Account</a>
           </nav>

           <div class="container">

            <form action="cusdet.php" method="post" autocomplete="off">

 
             <section class="cus_det">

                 <h2>Customer Info</h2>


                <input type="text" placeholder="Full Name " name="fname" required>

                <input type="text" placeholder="Email ID " name="email" required>

                <input type="text
                " placeholder="Contact Number " name="cno" required>


                <input type="text" placeholder="Building Details" name="bdet" required>
                <input type="text" placeholder="Complete Address " name="cadd" required>
                <input type="text" placeholder="City" name="cname" required>


                <input type="text" placeholder="Pincode" name="pcode" required>


                 <input class="btn" type="submit" value="Book Now" name="submit">

                </form>

             </section>




             <form action="itemdb.php" method="post" autocomplete="off">


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

                <input  type="text"  name="name" placeholder="Enter Email-ID ">

                 <input class="btn" type="submit" value="Save" name="submit" onclick="
                 item()">
                </form>

 <script>
    function item(){
          window.alert("Items Has Been Added")
    }
 </script>

             </section>





           </div>


</body>
</html>