<?php
// PHP code goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraftin'e</title>
    <link rel="icon" type="image/png" href="favicon.jpg">
    <link rel="stylesheet" href="custom.css">
</head>
<body>

<div class="hamburger" onclick="toggleSidebar()">
        &#9776;
    </div>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="products.php">PRODUCTS</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="#about-us">ABOUT US</a></li>
            <li><a href="#customization">CONTACT US</a></li>
            <li><a href="custom.php">CUSTOMIZATION</a></li>
            
        </ul>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
    
    <!--HEADER, NAVIGATION BAR , SEARCH BAR-->
    <div class="header">
        <span class="navbar-container">
            <nav class="navbar">
                <ul>
                    <li id="homenav"><a href="index.php">HOME</a></li>
                    <li><a href="products.php">PRODUCTS</a></li>
                    <li><a href="index.html">EVENTS</a></li>
                    <li><a href="#about-us">ABOUT US</a></li>
                    <li><a href="index.php#about-us">CONTACT US</a></li>
                    <li><a href="custom.php">CUSTOMIZATION</a></li>
                    
                </ul>

                <div class="search-container">
                    <input type="text" placeholder="Search..." class="search-bar">
                </div>
            </nav>
        </span>
    </div>



      
    <!-- Kraftin'e Text and Tagline below navbar -->
    <div class="brand">
    <span class="brand-container">
        <div class="logo-container">
            <img src="new.png" alt="Kraftin'e Logo" class="logo">
        </div>
        <p id="kraftine">K r a f t i n ' e</p>
    </span>    

    <span class="tagline-container">
        <p id="tagline">Made For You.</p>
    </span> 
</div>


    <!-- Icons -->
    <div class="icons">
        <span class="icons-container">
            <img src="cart_icon-removebg-preview.png" id="cart">
            <img src="login_icon-removebg-preview.png" id="login">
        </span>
    </div>


    <div class="hamburger" onclick="toggleSidebar()">
        &#9776;
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="products.php">PRODUCTS</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="#about-us">ABOUT US</a></li>
            <li><a href="custom.php">CUSTOMIZATION</a></li>
        </ul>
    </div>

    

        <!-- Footer -->
    <div class="footer">
        <p>© 2024 Kraftin'e. All rights reserved.</p>
    </div>

</body>
</html>
