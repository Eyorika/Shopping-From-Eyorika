<?php

?>
<!-- components/header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>moood</title>
   <link rel="stylesheet" href="stl-night.css">
   <script src="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"></script>
</head>
<header>
    <!-- Your other header content -->

    <!-- Location Toggle -->
    <div class="location-toggle" onclick="toggleDarkMode()">
        <i class="bx bx-sun"></i> <!-- Light Mode Icon -->
        <i class="bx bx-moon"></i> <!-- Dark Mode Icon -->
    </div>
</header>

<style>
    /* Dark Mode Styles */
body.dark-mode {
    background-color: #1a1a1a;
    color: #fff;
}

/* Light Mode Styles */
body.light-mode {
    background-color: #fff;
    color: #333;
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

<body>
    

</body>