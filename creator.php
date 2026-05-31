<?php

$creator = $_GET['creator'] ?? '';

$creators = [

    "vangogh" => [
        "name" => "Vincent Van Gogh",
        "image" => "images/Van Gogh With Frame.png",
        "bio" => "Vincent van Gogh (1853–1890) was a Dutch Post-Impressionist painter known for his emotional expression, bold colors, and dramatic brushwork.
Although he only sold a few paintings during his lifetime, he became one of the most influential artists in Western art.
His works often reflected emotion, nature, daily life, and personal struggles.
Van Gogh created more than 2,000 artworks, including paintings, sketches, and letters.",
        
        "artworks" => [
            [
                "title" => "The Starry Night",
                "year" => "1889",
                "image" => "images/starrynight.png",
                "info" => "A famous painting with a swirling night sky."
            ],
            [
                "title" => "Sunflowers",
                "year" => "1888",
                "image" => "images/sunflowers.png",
                "info" => "One of Van Gogh's most iconic flower paintings."
            ],
            [
                "title" => "The Bedroom",
                "year" => "1888",
                "image" => "images/bedroom.png",
                "info" => "A painting of Van Gogh's bedroom in Arles."
            ],
            [
                "title" => "Irises",
                "year" => "1889",
                "image" => "images/irises.png",
                "info" => "Inspired by flowers in the asylum garden."
            ],
            [
                "title" => " Wheatfield with Crows",
                "year" => "1888",
                "image" => "images/wheatfield.png",
                "info" => "A colorful cafe scene at night."
            ]
        ]
    ],

    "monet" => [
        "name" => "Claude Monet",
        "image" => "images/Monet With Frame.png",
        "bio" => "Claude Monet was one of the founders of Impressionism
        Oscar-Claude Monet (1840–1926) was a French painter and the founder 
        of Impressionism, a movement named after his 1872 painting Impression, Sunrise.  
        Born in Paris and raised in Le Havre, he became a prolific practitioner 
        of plein air (outdoor) painting, aiming to capture the fleeting effects of light and nature. .",

        "artworks" => [
            [
                "title" => "Water Lilies",
                "year" => "1906",
                "image" => "images/waterlilies.png",
                "info" => "A famous painting series inspired by Monet's garden."
            ],
            [
                "title" => "Garden at Sainte-Adresse",
                "year" => "1867",
                "image" => "images/gardenatsainteAdresse.png",
                "info" => "The artist painted the view of Honfleur from his
garden situated on the southern side of the Seine River."
            ],
            [
                "title" => "Morning on the Seine near Giverny",
                "year" => "1897",
                "image" => "images/seineseries.png",
                "info" => "Claude Monet's Seine series, which he started in 1896, was not completed until a year later due
to poor weather."
            ],
            [
                "title" => "Haystacks",
                "year" => "1891",
                "image" => "images/haystacks.png",
                "info" => "Claude Monet produced these beautiful depictions of rural scenes over the period of four years,
comprising around 25 works in total. The artist visited the farmers’ fields at various times of the
day and throughout the various seasons."
            ],
            [
                "title" => "Garden at Giverny",
                "year" => "1900",
                "image" => "images/gardenatgiverny.png",
                "info" => "The artist researched extensively to obtain the specific look he was going for in his backyard,
designing and arranging his flowerbeds with the color of his blooms and the timing of their
flowering in mind to obtain a constant aesthetic in his garden."
            ]
            

        ]
    ],


    "bacon" => [
        "name" => "Francis Bacon",
        "image" => "images/Bacon With Frame.png",
        "bio" =>"Francis Bacon (1909–1992) was an Irish-born
        British figurative painter known for his raw, unsettling imagery. Focusing on
        the human form, his subjects included crucifixions, portraits of popes,self-
        portraits, and portraits of close friends, with abstracted figures sometimes 
        isolated in geometrical structures.",
        
        "artworks" => [
            [
                "title" => "Crucifiction",
                "year" => "1933",
                "image" => "images/crucifiction.png",
                "info" => "An earlier more experimental work of Bacon."
            ],
            [
                "title" => "HeadVi",
                "year" => "1949",
                "image" => "images/headvi.png",
                "info" => "A head of one his friends."
            ],
            [
                "title" => "Self Portrait",
                "year" => "1969",
                "image" => "images/selfportrait.png",
                "info" => "A painting of Bacon's self but in his style."
            ],
            [
                "title" => "Study Portrait",
                "year" => "1952",
                "image" => "images/studyportrait.png",
                "info" => "An iteration of HeadVi."
            ],
            [
                "title" => "Two Figures",
                "year" => "1953",
                "image" => "images/twofigures.png",
                "info" => "Distorted image of two figures on bed."
            ]
        ]
    ],



    "dali" => [
        "name" => "Salvador Dalí",
        "image" => "images/Dali With Frame.png",
        "bio" => "Salvador Dalí (1904–1989) was a Spanish
        surrealist artist renowned for his technical skill, precise draftsmanship, and 
        the striking and bizarre images in his work.",
        
        "artworks" => [
            [
                "title" => "Sleep",
                "year" => "1937",
                "image" => "images/sleep.png",
                "info" => "Early work that camputre the dream like imagery."
            ],
            [
                "title" => "Persistence of Memmory",
                "year" => "1931",
                "image" => "images/memmory.png",
                "info" => "Passage of time in dreams."
            ],
            [
                "title" => "Dream Caused by the Flight of a Bee Around a Pomegranate a Second Before Awakening.",
                "year" => "1944",
                "image" => "images/Bee.png",
                "info" => "A paiting involving a dream and his wife."
            ],
            [
                "title" => "Swans Reflecting Elephants",
                "year" => "1937",
                "image" => "images/elephants.png",
                "info" => "A painting with two subjects."
            ],
            [
                "title" => "Metamorphosis of Narcissus",
                "year" => "1953",
                "image" => "images/morph.png",
                "info" => "A painting showing complex symbolisms."
            ]
        ]
    ],



    "davinci" => [
        "name" => "Leonardo Da Vinci",
        "image" => "images/Da Vinci With Frame.png",
        "bio" =>"Leonardo Da Vinci (1452–1519)was an Italian polymath of the High Renaissance who was 
        active as a painter, draughtsman, engineer, scientist, theorist, sculptor, and architect. He 
        is also a professional procrastinator.",
        
        "artworks" => [
            [
                "title" => "The Last Supper",
                "year" => "1498",
                "image" => "images/lastsupper.png",
                "info" => "Depicts the last supper of Jesus Christ and his 12 apostles before Judas betrayed Him"
            ],
            [
                "title" => "Ginevra de Benci",
                "year" => "1478",
                "image" => "images/ginerva.png",
                "info" => "This image features a portrait of 15th-century Florentine aristocrat Ginevra de' Benci"
            ],
            [
                "title" => "The Virgin of the Rocks",
                "year" => "1486",
                "image" => "images/virgin.png",
                "info" => " The scene depicts the Virgin Mary with the infant Jesus, the infant Saint John the Baptist, and an angel in a rocky landscape."
            ],
            [
                "title" => "Vitruvian Man",
                "year" => "1490",
                "image" => "images/man.png",
                "info" => "A painting about ideal human proportions based on the writings of the Roman architect Vitruvius."
            ],
            [
                "title" => "Mona Lisa",
                "year" => "1517",
                "image" => "images/ml.png",
                "info" => "The portrait is traditionally believed to depict Lisa Gherardini, the wife of a wealthy Florentine merchant."
            ]
        ]
    ],






];

if (!isset($creators[$creator])) {
    echo "Creator not found.";
    exit;
}

$data = $creators[$creator];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories - Collections of Stories</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    <body class="creator">
    <header class="top-bar">
        <div class="container">
            <div class="nav-container">
                
                <div class="logo">Collection of Stories</div>
                
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

    <main class="container">

<h1 class="gallery-title">
    <?php echo $data['name']; ?>
</h1>

<div style="text-align:center; margin-top:30px;">

    <img src="<?php echo $data['image']; ?>" 
         style="width:300px;">

    <p class="bio">
    <?php echo $data['bio']; ?>
</p>

</div>

<div class="artworks" style="
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    margin-top:50px;
    margin-bottom:100px;
">

<?php foreach($data['artworks'] as $art){ ?>

    <div style="
        background:rgba(0,0,0,0.7);
        color:white;
        padding:20px;
        border-radius:10px;
    ">

<img src="<?php echo $art['image']; ?>" 
     class="art-image"
     onclick="
        openModal(
            '<?php echo $art['image']; ?>',
            '<?php echo $art['title']; ?>',
            '<?php echo $art['year']; ?>'
        )
">

        <h2><?php echo $art['title']; ?></h2>

        <p><br>
            <strong>Year:</strong>
            <?php echo $art['year']; ?>
        </p></br>

        <p><br>
            <?php echo $art['info']; ?>
        </p></br>

    </div>

<?php } ?>

</div>

</main>
</div>

</main>

<div id="artModal" class="modal">

    <span class="close" onclick="closeModal()">&times;</span>

    <div class="modal-content">

        <img id="modalImage">

        <h2 id="modalTitle"></h2>

        <p id="modalYear"></p>

    </div>

</div>

<script>

function openModal(image, title, year, info){

    document.getElementById("artModal").style.display = "flex";

    document.getElementById("modalImage").src = image;

    document.getElementById("modalTitle").innerText = title;

    document.getElementById("modalYear").innerText = "Year: " + year;

}

function closeModal(){

    document.getElementById("artModal").style.display = "none";
}

window.onclick = function(event){

    let modal = document.getElementById("artModal");

    if(event.target == modal){

        closeModal();
    }
}


</script>

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