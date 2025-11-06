<?php
    $navigation=array("Home", "About Us", "Menu", "Contact", "Impressions");
    $navigationLink=array("index dark.php", "about_us dark.php", "menu dark.php", "contact dark.php", "impressions dark.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Impressions</title>
        <link rel="stylesheet" href="static/styles/Impressions dark.css">
    </head>
    <body>
        <header class="header">
            <nav class="nav">
            <ul class="nav-list">
                <li><a href="Impressions.php" class="darkmode-change"><img src="static/images/darkmode.png" alt="Light" class="darkmodeimg"></a></li>
                <?php
                    for ($i=0; $i<count($navigation); $i++) {
                        echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></li>';
                    }
                ?>
                <li><a href="Impressions dark_nl.php" class="language-change">NL</a></li>
            </ul>
            </nav>
        </header>
        <div class="hero-text">
            <h1>
                OUI Café Gallery
            </h1>
        </div>
        <div class="hero-image-container">
            <img src="static/images/Heroimpressions.svg" alt="Impressionshero" class="hero-image">
        </div>
        <div class="impressions-container">
            <img src="static/images/Impressions1.svg" alt="Impression 1" class="impression-image" id="impression1">
            <img src="static/images/Impressions2.svg" alt="Impression 2" class="impression-image" id="impression2">
            <img src="static/images/Impressions3.svg" alt="Impression 3" class="impression-image" id="impression3">
            <img src="static/images/Impressions4.svg" alt="Impression 4" class="impression-image" id="impression4">
            <img src="static/images/Impressions5.svg" alt="Impression 5" class="impression-image" id="impression5">
            <img src="static/images/Impressions6.svg" alt="Impression 6" class="impression-image" id="impression6">
            <img src="static/images/Impressions7.svg" alt="Impression 7" class="impression-image" id="impression7">
            <img src="static/images/Impressions8.svg" alt="Impression 8" class="impression-image" id="impression8">
            <img src="static/images/Impressions9.svg" alt="Impression 9" class="impression-image" id="impression9">
            <img src="static/images/Impressions10.svg" alt="Impression 10" class="impression-image" id="impression10">
            <img src="static/images/Impressions11.svg" alt="Impression 11" class="impression-image" id="impression11">
            <img src="static/images/Impressions12.svg" alt="Impression 12" class="impression-image" id="impression12">
            <img src="static/images/Impressions13.svg" alt="Impression 13" class="impression-image" id="impression13">
            <img src="static/images/Impressions14.svg" alt="Impression 14" class="impression-image" id="impression14">
            <img src="static/images/Impressions15.svg" alt="Impression 15" class="impression-image" id="impression15">
            <img src="static/images/Impressions16.svg" alt="Impression 16" class="impression-image" id="impression16">
            <img src="static/images/Impressions17.svg" alt="Impression 17" class="impression-image" id="impression17">
            <img src="static/images/Impressions18.svg" alt="Impression 18" class="impression-image" id="impression18">
            <img src="static/images/Impressions19.svg" alt="Impression 19" class="impression-image" id="impression19">
            <img src="static/images/Impressions20.svg" alt="Impression 20" class="impression-image" id="impression20">
            <img src="static/images/Impressions21.svg" alt="Impression 21" class="impression-image" id="impression21">
        </div>
        <hr class="vertical-line">
        <div class="playlist">
            <hr class="full-vertical-line" id="playlist-line1">
            <div class="playlist-text-box">
                <h1 class="playlist-text">Explore Our Cafe’s Playlists!</h1>
            </div>
            <hr class="full-vertical-line" id="playlist-line2">
            <div class="record-block">
                <div class="record-block-left"></div>
                <div class="record-block-right"></div>
            </div>
            <img src="static/images/Record.gif" alt="Record" class="record">

            <div class="spotify-container">
                <iframe src="https://open.spotify.com/embed/playlist/1AqAA0ODbJBbJnvceA5SW0?utm_source=generator&theme=0" loading="lazy"></iframe>
                <iframe src="https://open.spotify.com/embed/playlist/0QYcdurtk1zrZBZcGKeyWx?utm_source=generator&theme=0" loading="lazy"></iframe>
                <iframe src="https://open.spotify.com/embed/playlist/3hBYNl6WZRpAZy0kqZUj0n?utm_source=generator&theme=0" loading="lazy"></iframe>
                <iframe src="https://open.spotify.com/embed/playlist/06JgdikHP2djuAwaSeIbAa?utm_source=generator&theme=0" loading="lazy"></iframe>
                <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DXbehaqJzJXqw?utm_source=generator&theme=0" loading="lazy"></iframe>
            </div>
        </div>

        <hr class="vertical-line">

        <footer>
        <div class="footerbox1">
            <p class="footerlogo">OUI Café</p>
            <p class="footertext">Hoofdstraat 75</p>
            <p class="footertext">7811 ED Emmen, The Netherlands</p>
            <div class="footerline1"></div>
            <ul class="footerbuttons">
                <?php
                    for ($i=0; $i<count($navigation); $i++) {
                        echo '<li class="footertext"><a href="'.$navigationLink[$i].'"><b>'.$navigation[$i].'</b></a></li>';
                    }
                ?>
            </ul>
        </div>
        <div class="footerillustrationbox">
            <img src="static/images/footerimg.svg" alt="macaron illustration" class="imgfooter">
        </div>
        <div class="footerbox2">
            <p class="footertext">claire@oui-cafe.fr</p>
            <p class="footertext">+31 6 31782094</p>
            <div class="footerline2"></div>
            <p class="copyright">COPYRIGHT &copy; 2025 GROUP 1B</p>
        </div>
       
    </footer>
    </body>
</html>