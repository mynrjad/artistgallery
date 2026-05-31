<?php

if (isset($_GET['artist_name'])) {

    $search = strtolower(trim($_GET['artist_name']));

    $artists = [

        "francis bacon" => "bacon",
        "claude monet" => "monet",
        "vincent van gogh" => "vangogh",
        "salvador dali" => "dali",
        "leonardo da vinci" => "davinci"

    ];

    if (array_key_exists($search, $artists)) {

        header("Location: artist.php?artist=" . $artists[$search]);

    } else {

        header("Location: errorpage.php");

    }

    exit();

} else {

    header("Location: errorpage.php");
    exit();

}

?>