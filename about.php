<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css">

 


</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<section class="moto-section container" style="text-align:center">
      <h2 style="text-align: center; border-bottom: 4px solid #fff00f; padding: 10px; font-size: 20px;">Our Moto</h2>
      <div class="moto-text" id="moto-text"></div>

      <style>
      /* Add your existing styles here */
      .moto-text {
         background-color: wheat;
         font-size: 32px;
         margin-top: 20px;
         white-space: nowrap;
         overflow: hidden;
         border-right: 2px solid #fff00f;
         padding-right: 8px;
         animation: typing 2s steps(200, end);
         display: inline-block;
         color: black;
      }
      @keyframes typing {
         25% {
            right: 25px;
         }
         50% {
            right: 50px;
         }
         75% {
            right: 75px;
         }
      }
   </style>
<script>
      const motoWords = ["Transforming Visions into Inspired Tech Realities.", "Sister company of E.A.T Solutions.", "A team of experts who are passionate about technology.", "Dedicated to provide the best solutions to our customers."];
      const motoTextElement = document.getElementById('moto-text');
      let wordIndex = 0;
      let charIndex = 0;

      function typeEffect() {
         if (charIndex < motoWords[wordIndex].length) {
            motoTextElement.innerHTML += motoWords[wordIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeEffect, 100); // typing speed (milliseconds)
         } else {
            setTimeout(eraseEffect, 2000); // Wait for 2 seconds 
         }
      }

      function eraseEffect() {
         if (charIndex > 0) {
            motoTextElement.innerHTML = motoWords[wordIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(eraseEffect, 50); // Adjust the erasing speed (milliseconds)
         } else {
            wordIndex = (wordIndex + 1) % motoWords.length;
            setTimeout(typeEffect, 500); // Wait for 0.5 seconds before typing the next word
         }
      }

      // Start the typing effect
      typeEffect();
   </script>
   </section>
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/inspiretech.jpg" alt="">
      </div>

     <div class="content">
         <h3 style="text-align:center; color:black"> About Us &cupcup;</h3>

      <p>Inspire Tech Hub is a startup company which is aimed at providing the best technology solutions to the customers. We are a team of experts who are passionate about technology and we are dedicated to provide the best solutions to our customers. We are a team of experts who are passionate about technology and we are dedicated to provide the best solutions to our customers. We

         
      </div>
      
   </div>

</section>


<section class="reviews">
   
   <!--<h1 class="heading">Our StartUp CTO</h1>-->

   <div class="swiper">

   <div class="swiper-wrapper">

   
      
      <div class="swiper-slide slide bg-light bg-opacity">
         <img src="images/adm.png" alt="">
         <p class="h2">Eyob Ayalew</p>
         <p>My name is Eyob  I am self skilled developer The founder of E.A.T Solutions and CEO of Inspire Tech Hub</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3><i class="fab fa-facebook-f"></i>
          <a href="https://www.facebook.com/EyobAyalewT/" target="_blank">Eyob Ayalew</a></h3>
      </div>

      

      

   </div>

   <div class="swiper-slide slide">
         <img src="images/inspiretech.jpg" alt="">
         <p>Inspire technology </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3><a href="https://www.facebook.com/inspiretech.hub" target="_blank">Inspire Tech Hub</a></h3>
      </div>

   <div class="swiper-pagination"></div>

   </div>

</section>




<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>