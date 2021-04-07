<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Game Portal</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <!--Navigation-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Game Portal</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="games.php">Games</a></li>
            <li><a href="consoles.php">Consoles</a></li>
            <li><a href="Equipment.php">Equipment</a></li>
            <li><a href="support.php">Support</a></li>
        </ul>
    </nav>

    <!--carousel-->
  <div class="carousel">
      <button class="carousel__button carousel__button--left is-hidden">
          <img src="img/left.sfg.png" alt="">
              </button>
     <div class="carousel__track-container">
         <ul class="carousel__track">
             <li class="carousel__slide current-slide">
                 <img class="carousel__image" src="img/gaming1.jpg" alt="">
             </li>
             <li class="carousel__slide">
                <img class="carousel__image" src="img/gaming2.jpg" alt="">
             </li>
             <li class="carousel__slide">
                <img class="carousel__image" src="img/gaming3.jpg" alt="">
             </li>
         </ul>
     </div>
      <button class="carousel__button carousel__button--right">
        <img src="img/right.sfg.png" alt="">
      </button>
      <div class="carousel__nav">
          <button class="carousel__indicator current-slide"></button>
          <button class="carousel__indicator"></button>
          <button class="carousel__indicator"></button>
      </div>
  </div>
    <script src="js/carousel.js"></script>
    

    <!-- Cards --> 


    <div class="grid"> 

<div class="grid-item"> 

<div class="card-size"> 

        <img class="card-img" src="./img/spiderman.jpeg" alt="Spriderman"> 

        <div class="card-content"> 

            <h1 class="card-header">Spider-Man: Miles Morales</h1> 

            <p class="card-text">Marvel's Spider-Man: Miles Morales is a 2020 action-adventure game developed by Insomniac Games and published by Sony Interactive Entertainment for the PlayStation 4 and PlayStation 5</p> 

            <button class="card-btn">Visit<span>&rarr;</span></button> 

        </div> 

    </div> 

</div> 

<div class="grid-item"> 

<div class="card-size"> 

        <img class="card-img" src="./img/coldwar.jpeg" alt="Call of Duty"> 

    <div class="card-content"> 

            <h1 class="card-header">Call of Duty: Cold War</h1> 

            <p class="card-text">Call of Duty: Black Ops Cold War is a 2020 first-person shooter video game developed by Treyarch and Raven Software and published by Activision</p> 

            <button class="card-btn">Visit<span>&rarr;</span></button> 

        </div> 

    </div> 

</div> 

<div class="grid-item"> 

<div class="card-size"> 

        <img class="card-img" src="./img/madden.jpeg" alt="Madden"> 

        <div class="card-content"> 

            <h1 class="card-header">Madden 21</h1> 

            <p class="card-text"> Madden NFL is an American football video game series developed by EA Tiburon for EA Sports. It is named after Pro Football Hall of Fame coach and commentator John Madden, and it has sold more than 250 million copies </p> 

            <button class="card-btn">Visit<span>&rarr;</span></button> 

        </div> 

    </div> 

</div> 



</div> 



    <!--footer-->
        <div class="footer-container">
            <div class="footer">
                <div class="footer-heading footer-1">
                    <h2>About Us</h2>
                    <a href="#">Overview</a>
                    <a href="#">Games</a>
                    <a href="#">Equipment</a>
                    <a href="#">Consoles</a>
                    <a href="#">Terms of Service</a>
                </div>
                <div class="footer-heading footer-2">
                    <h2>Contact Us</h2>
                    <a href="#">Jobs</a>
                    <a href="#">Contact</a>
                    <a href="#">Sponsors</a>
                </div>
                <div class="footer-heading footer-3">
                    <h2>Social Media</h2>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">YouTube</a>
                    <a href="#">Twitter</a>
                </div>
                <div class="footer-email-form">
                    <h2>Join our newsletter</h2>
                    <input type="email" placeholder="Enter your email address" id="footer-email">
                    <input type="submit" value="Sign Up" id="footer-email-btn">
                </div>
            </div>
        </div>
 
</body>
</html>


  <!--This organization is all about gaming. It could be anything from consoles all the way down to controller attatchments.
       We understand that people have had trouble ordering new things such as the PS5 from different places, but we want this
       to be a safe and easy way to order anything you want when it comes to gaming.-->