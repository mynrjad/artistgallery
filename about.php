<?php
$pageTitle = "About";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <body class="about">
    <header class="top-bar">
        <div class="container">
            <div class="nav-container">
             <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="Logo" style="height: 50px; vertical-align: middle;">
                    Collection of Stories
                </a>
            </div>      
    
                
                <div class="nav-menu-right">
                    
                    <div class="nav-links">
                        <a href="index.php">Home</a>
                        <a href="artist.php">Artist</a>
                        <a href="about.php">About</a>
                        <a href="contact.php">Contact</a>
                    </div>

                    <form action="search.php" method="GET" class="search-bar">
                 <input type="text" name="pangalan" placeholder="Search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </form>
            </header>
<body>

    <div class="about-container">

        <div class="about-card">
            <h1>About Us</h1>

            <p>
                We’re an online gallery that brings famous artworks and hidden gems
                together in one friendly, easy-to-explore space.
                Our mission is to make art accessible and enjoyable for everyone,
                whether you’re a student, an art lover, or just curious.
                Every piece comes with clear, engaging descriptions—artist bios,
                the story behind the work, technique notes, and why it matters—so
                anyone can enjoy and learn.
            </p>

            <p>
                Browse themed collections, follow art movements, or search by
                medium; whether you’re a student, an art-lover, or just curious,
                we make discovery simple and fun.We’re here to spark curiosity, 
                invite conversation, and help you Our goal is to spark curiosity, 
                invite conversation, and help you connect with art on your own terms.
            </p>
        </div>

    </div>

    <footer class="main-footer">
    <p>&copy; 2026 Collection of Stories. All Rights Reserved.</p>
    <div class="footer-links">
        <a href="index.php">Home</a> | 
        <a href="about.php">About Us</a> | 
        <a href="contact.php">Contact</a>
    </div>
</footer>

</body>
</html>