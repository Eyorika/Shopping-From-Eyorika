<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
<html>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">

<header class="header">
   
<style>
   /* Dark Mode Styles */
 body.dark-mode {
   justify-content: left;
   background-color: #FFA500;
   color: #fff;
}

/* Light Mode Styles */
 body.light-mode {

   background-color: #fff;
   color: #333;
}

/* ... Your existing styles ... */

.icons {
   display: flex;
   align-items: center;
}

.dark-light-toggle {
   cursor: pointer;
   margin-left: 10px; /* Adjust the margin as needed */
}

/* ... Your existing styles ... */
.header-small {
         font-size: 14px;
         white-space: nowrap;
         overflow: hidden;
         border-right: 2px solid #000;
         padding-right: 8px;
         display: inline-block;
      }
</style>


   <script>
   function toggleDarkMode() {
       const body = document.body;
       body.classList.toggle('dark-mode');
       body.classList.toggle('light-mode');
   }
</script>
<script>
   // Set initial mode (e.g., light mode)
   document.body.classList.add('light-mode');
</script>

 <span class="header-small" id="header-small"></span>

   <section class="flex">
<a href="home.php" class="navbar-brand">E.A.T Commerce

</a>
 <!--text effect   -->
 <script>
      const headerLines = [
         "አምላኬ ታሪኬን ለዉጠዉ  ጌታየ ታሪኬን ለዉጠዉ",
         "  ሠዉ  አርገኝና  ሠዉ  ይግረመዉ"
      ];

      const headerSmallElement = document.getElementById('header-small');
      let lineIndexHeader = 0;
      let charIndexHeader = 0;

      function typeEffectHeader() {
         if (lineIndexHeader < headerLines.length) {
            if (charIndexHeader < headerLines[lineIndexHeader].length) {
               headerSmallElement.innerHTML += headerLines[lineIndexHeader].charAt(charIndexHeader);
               charIndexHeader++;
               setTimeout(typeEffectHeader, 100); // Adjust the typing speed (milliseconds)
            } else {
               // Move to the next line after typing the current line
               lineIndexHeader++;
               charIndexHeader = 0;
               setTimeout(typeEffectHeader, 1000); // Adjust the pause between lines (milliseconds)
            }
         }
      }

      // Start the typing effect for the header small text
      typeEffectHeader();
   </script>

   <!--Text typing effect-->
   

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About Us</a>
         <a href="orders.php">Orders</a>
         <a href="shop.php">Shop Now</a>
         <a href="contact.php">Contact Us</a>
      </nav>

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php"><i class="fas fa-search"></i> Search </a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
      </div>
<!-- ... Your existing header content ... -->

<div class="icons">
   <?php
       // ... Your existing PHP code for wishlist, cart, user profile ...
   ?>
   <div class="dark-light-toggle" onclick="toggleDarkMode()">
       <i class="bx bx-sun"></i> <!-- Light Mode Icon -->
       <i class="bx bx-moon"></i> <!-- Dark Mode Icon -->
   </div>
</div>

<!-- ... Your existing header content ... -->


      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">Update Profile.</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Register.</a>
            <a href="user_login.php" class="option-btn">Login.</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>Please Login Or Register First to proceed !</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Register</a>
            <a href="user_login.php" class="option-btn">Login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>


   

</header>
</html>