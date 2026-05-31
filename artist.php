<?php
$pageTitle = "Artist";
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
    <body class="artist">
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

    <div class="artist-container">

        <div class="artist-card">
            <h1>Artist</h1>

            <p>
              Collection of Stories is an art gallery dedicated to showing various collectionsof art,
               it aims to show the stories behind the art while the artist was making them. From 
               Vincent Van Gogh's artistic brush strokes to Francis Bacon's morbidly fascinating art.
            </p>

            <p>
                The collection of stories started with multimedia students wanting to show that there 
                is so much more than what meets the eye, every brushstrokes is a struggle, a celebration,
                 a contemplation for the artists.
            </p>

            <p>
                We, the students, want to spread that art is an effective visual medium for the art itself 
                and for the art's history. To know why the art was created, what was surrounding the artist 
                at that time and what it means to the people around them. 

            </p>
            
            <p>
                Collection of Stories is a love letter to both the artists and their art. A letter dedicated 
                to showing off their works and spreading to hopefully more people who loves their works as 
                much as we do. 

            </p>

            <p>
               Enjoy the site! Love, CoS

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