<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories - Collections of Stories</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <body class="Contact">
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
                        <a href="About.php">About</a>
                        <a href="contact.php">Contact</a>
                    </div>

                    <form action="search.php" method="GET" class="search-bar">
                 <input type="text" name="pangalan" placeholder="Search...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </form>
            </header>

    <main class="container">
        <div class="card-grid">
            <section class="card">
                </section>
            
            <section class="card">
                </section>
            
            <section class="card">
                </section>
        </div>
    </main>
    <div id="room-contact" class="absolute inset-0 w-full h-full flex flex-col transition-all duration-1000 transform translate-x-full hidden overflow-y-auto p-6 md:p-12 aged-parchment-layer">
    
    <div class="museum-container">

        <div class="col-left museum-card">
            <div class="space-y-6 relative z-10">
                <div class="border-b border-champagne-500/15 pb-3">
                    <h3 class="font-Times New Roman text-xs text-obsidian-950 uppercase tracking-[0.2em] font-bold">Correspondence Desk</h3>
                    <p class="text-champagne-600 text-[8px] uppercase tracking-widest mt-0.5">Get in Touch</p>
                </div>

                <p class="text-obsidian-900/80 font-cormorant text-sm leading-relaxed italic">
                    Have questions or collaboration inquiries? We’d love to hear from you.
                </p>

                
                <div class="space-y-4">
                    <div>
                        <p class="label-mini">Location</p>
                        <p class="text-obsidian-950 text-xs font-sans">Las Piñas City, Philippines</p>
                    </div>
                    <div>
                        <p class="label-mini">Email</p>
                        <a href="mailto:stilaspinas@gmail.com" class="text-champagne-700 text-xs underline">STICollegeLasPiñas@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-right museum-card">
            <div class="space-y-6">
                <div class="flex justify-between items-center border-b border-champagne-500/15 pb-3">
                    <h3 class="font-cinzel text-xs text-obsidian-950 uppercase tracking-[0.2em] font-bold">Send a Message</h3>
                </div>

                <form id="correspondence-form" onsubmit="submitForm(event)" class="space-y-4">
                    <div>
                        <label class="label-mini">Name</label>
                        <input type="text" id="input-name" required class="form-input">
                    </div>
                    <div>
                        <label class="label-mini">Message</label>
                        <textarea id="input-message" required rows="3" class="form-input"></textarea>
                    </div>
                    <button type="submit" class="museum-btn w-full">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <p>&copy; 2026 Collection of Stories. All Rights Reserved.</p>
    <div class="footer-links">
        <a href="index.php">Home</a> | 
        <a href="About.php">About Us</a> | 
        <a href="contact.php">Contact</a>
    </div>
</footer>
</body>
</html>