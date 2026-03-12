<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'Enquiry made successfully!';
   }else{
      $message[] = 'Enquiry failed';
   }

}
?>



    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class=""></i> <strong>Os</strong>Packers And Movers </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#Payment">Payment Option</a>
        <a href="#appointment">Enquiry</a>
        <a href="#review">review</a>
       
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="blog-5" alt="">
    </div>

    <div class="content">
    <img src="blog-5" alt="">
        <h3>Welcome to The Packers Movers</h3>
     
        <p> Aimed at making any relocation procedure a hassle-free and secure one for the ultimate customer, the online reference directory of Packers And Movers is the best online platform to hire genuine & professional packers and movers companies across India. </p>
       
        <a href="#Enquiry" class="btn"> Enquire Now <span class="fas fa-chevron-right"></span> </a>
        <div class="image">
            <img src="image/packers.jpg" alt="">
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
   
        <h3>150+</h3>
        <p>Total Workers</p>
    </div>

    <div class="icons">
       
        <h3>100+</h3>
        <p>satisfied Customers</p>
    </div>

    <div class="icons">
       
        <h3>80+</h3>
        <p>Transport facility</p>
    </div>

  

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/home-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>OS  Packers And Movers</h3>
            <p>The Packers And Movers is an online platform that helps people find reliable packers and movers in India. We offer a customized range of relocation services for household and corporate goods, and only list verified and background-checked companies. The platform connects people directly with movers, without the need for mediators or reference fees.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class=""></i>
            <h3>Home Relocation</h3>
            <p>Plan a hassle-free and safe household move anywhere in the country with our packers and movers.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class=""></i>
            <h3>24/7 Office Relocation</h3>
            <p>Office packers and movers companies will safely pack and move your expensive office items within time.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class=""></i>
            <h3>Car Transport</h3>
            <p>Safely relocate your four-wheeler in specialized car carriers of our car transportation companies.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class=""></i>
            <h3>Bike Transport</h3>
            <p>Let our reliable bike shifting companies handle your two-wheeler relocation in a hassle-free manner.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class=""></i>
            <h3>Storage Services</h3>
            <p>Our top movers and packers offer safe storage services to store your goods with insurance cover. </p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class=""></i>
            <h3>International Relocation</h3>
            <p>International moving companies will relocate your goods or vehicles safely fulfilling all cargo formalities.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Enquire</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/enquiry.jpg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make Enquiry</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="Enquire now" class="btn">
        </form>

    </div>

</section>

<!-- Payment section ends -->

<!-- Enquiry section starts   -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="payment/css/style.css">

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="shubham nanekar">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="shubhamnanekar@.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="name of card">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>
            <a href="eceived.html">
        <input type="submit" value="Pay Now" class="submit-btn">
        </a>
    </form>

</div>    
    
</body>
</html>
</section>

<!-- Enquiry section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>suraj</h3>
            <div class="stars">
                
            </div>
            <p class="text">I recently used The Packers Movers website to find a moving company for my relocation needs and I was thoroughly impressed with their services. The website was easy to navigate and had a vast list of verified and background-checked packers and movers to choose from.</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>ashok</h3>
            <div class="stars">
 
            </div>
            <p class="text">The moving company I hired through The Packers Movers was professional and efficient. The skilled and trained professionals had the necessary experience and tools to accomplish the loading and unloading activities without any damage to my goods. I was impressed by their punctuality and dedication towards ensuring a safe and secure relocation experience.

Overall, I highly recommend The Packers Movers to anyone looking for a reliable and cost-effective moving company in India. The website provides a transparent and trustworthy platform that connects people directly with movers, without the need for any mediators or reference fees.</p>
        </div>

        <div class="box">
            <img src="image/pic-1.jpg" alt="">
            <h3>pramod</h3>
            <div class="stars">
                
            </div>
            <p class="text">my experience was really good</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Payment </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> Enquiry</a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Home Relocation </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> 24/7 Office Relocation </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Car Transport </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Bike Transport </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Storage Services </a>
        </div>

        <div class="box">
            <h3>Enquiry info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +9552185658 </a>
            <a href="#"> <i class="fas fa-phone"></i> +9017825469 </a>
            <a href="#"> <i class="fas fa-envelope"></i>shubhamnanekar1@gmail.com</a>
            <a href="#"> <i class="fas fa-envelope"></i> omkarkatore@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Talegaon Dabhade, Pune </a>
        </div>

      
        </div>

    </div>

    <div class="credit"> created by <span>Shubham Nanekar</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

