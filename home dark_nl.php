<?php
$navigation=array("Home", "Over Ons", "Menu", "Contact", "Indruk");
$navigationLink=array("home dark_nl.php", "about_us.php", "menu.php", "contact.php", "impressions.php");
?>

<!DOCTYPE html> <!-- Home Page Dark (NL) -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 1.0">
    <title>oui Home Pagina</title>
    <link rel="stylesheet" href="static/styles/home dark.css">
</head>
<body>
    <div class="mainGrid">
        <header>
        <nav class="nav">
        <ul class="nav-list">
            <li><a href="home_nl.php" class="darkmode-change"><img src="static/images/darkmode.png" alt="Light" class="darkmodeimg"></a></li>
            <?php
            for ($i=0; $i<count($navigation); $i++)
            {
                echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></i>';
            }
            ?>
             <li><a href="home dark.php" class="language-change">EN</a></li>
        </ul>
        </nav>
        </header>
        <div class="mainImg">
            <div class="logoBackdrop">
                <span class="smallCircle"></span>
                <span class="mediumCircle"></span>
                <span class="largeCircle"></span>
            </div>
            <img class="ouiLogo" src="static/images/Logos-04.svg" alt="">
            <div>
                <h3 class="bounce">Ontdek</h3>
            </div>
        </div>
        <div class="content">
            <div class="textc1">
                <h3>Een Frans Café in Emmen</h3>
            </div>
            <div class="vl1"></div>
            <div class="textc2">
                <h3>OUI is een Frans café gebouwd op eenvoud, elegantie en de vreugde van 'ja' zeggen. We serveren koffie, thee, croissants en lichte lekkernijen in een rustige, verfijnde sfeer – een uitnodiging om even stil te staan ​​en van het moment te genieten.</h3>
            </div>    
            <div class="vl2"></div> <!--Vertical Line-->
            <div class="rectangle1">
                <div class="left">
                    <div class="textl">
                        <h2 class="history">Een korte geschiedenis van het Café</h2>
                        <div class="historyUnderline"></div>
                    </div>   
                    <div class="textl">
                        <div class="briefIntroText">
                            <p>In 2015 opende OUI met een simpele belofte: een plek creëren waar mensen even konden stilstaan en genieten van de kleine momenten in het leven. In 2017 was het voor velen een dagelijks ritueel geworden – een ontmoetingsplek gevuld met de geur van croissants en de warmte van een warm gesprek. In 2020 omarmde OUI een hernieuwde elegantie en verfijnde de ruimte tot een sfeer van kalme eenvoud.</p> 
                            <p class="todayText">Vandaag de dag is het nog steeds een plek om <span class="bold">ja te zeggen tegen het moment</span> - één kopje tegelijk.</p>  
                        </div>
                    </div>
                    <a href="" class="readMore">Lees Meer</a>
                </div>
                <div class="right">
                    <img class="cafebw" src="static/images/cafebw.svg" alt="black and white">
                </div>
            </div>
            <div class="vl2"></div>  <!--Vertical Line-->
            <div class="rectangle2">
                <div class="browse">
                    <a class="browseLink" href="">Kijk Door Onze Galerij</a>
                    <span class="hl"></span>
                    <img class="coffeeIllustration" src="static/images/illustrations_blueGreen_coffee.svg" alt="">
                </div>
                <div class="blueBackdropL"></div>
                <div class="carousel">
                    <img class="carouselImg" src="static/images/scroll1.png" alt="">
                    <img class="carouselImg" src="static/images/scroll2.png" alt="">
                    <img class="carouselImg" src="static/images/scroll3.png" alt="">
                    <img class="carouselImg" src="static/images/scroll4.png" alt="">
                    <img class="carouselImg" src="static/images/scroll5.png" alt="">
                </div>
            </div>
            <div class="rectangle3">
                <div class="blueBackdropWide">
                    <div class="whiteBackdropWide">
                        <div class="textPopular">
                        <h2 class="popular">Meest Populaire Keuzes</h2>
                        </div>
                        <div class="images">
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image1.png" alt=""></a>
                                <h4 class="choicesText">Verse Koffie</h4>
                                <div class="hl2"></div>
                            </div>
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image2.png" alt=""></a>
                                <h4 class="choicesText">Tasty Croissant</h4>
                                <div class="hl2"></div>
                            </div>
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image3.png" alt=""></a>
                                <h4 class="choicesText">Natuurlijke Thee</h4>
                                <div class="hl2"></div>
                            </div>
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image4.png" alt=""></a>
                                <h4 class="choicesText">Kleurrijke Meringue</h4>
                                <div class="hl2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="menuLink" href="menu.php">Bekijk Het Menu</a>
            </div>
            <div class="rectangle4">
                <img class="veganOptions" src="static/images/veganOptions.svg" alt="">
                <div class="veganLinkContent">
                    <a class="veganLink" href="">Scroll door onze veganistische opties</a>
                    <div class="veganLinkHl"></div>
                </div>
            </div>
            <div class="rectangle5">
                <div class="horizontalLineDBlue"></div>
                <img class="croissant" src="static/images/bottomCroissant.svg" alt="">
            </div>
        </div>
        <!-- Footer -->
        <footer>
            <div class="footerbox1">
                <p class="footerlogo">OUI Café</p>
                <p class="footertext">Hoofdstraat 75</p>
                <p class="footertext">7811 ED Emmen, The Netherlands</p>
                <div class="footerline1"></div>
                <ul class="footerbuttons">
                    <?php
                    for ($i=0; $i<count($navigation); $i++)
                    {
                        echo '<li class="footertext"><a href="'.$navigationLink[$i].'"><b>'.$navigation[$i].'</b></a></li>';
                    }
                    ?>
                </ul>               
            </div>
            <div class="footerillustrationbox">
                <img src="static/images/illustrations_yellow_merengue.svg" alt="macaron illustration" class="imgfooter">
            </div>
            <div class="footerbox2">
                <p class="footertext">claire@oui-cafe.fr</p>
                <p class="footertext">+31 6 31782094</p>
                <div class="footerline2"></div>
                <p class="copyright">COPYRIGHT &copy; 2025 GROUP 1B</p>
            </div>
        </footer>
    </div>

<?php
$show_popup = !isset($_GET['close']);
?>

<?php if ($show_popup): ?>
<div class="popup">
    <a href="?close=1" class="close-btn">×</a>
    <img src="static/images/popup.png" alt="">
        <?php 
        $hour=date('H');
        if ($hour>=18):?>
        <h6>Bonsoir</h6>
        <?php elseif($hour>=12):?>
        <h6>Bon Apres-Midi</h6>
        <?php else:?>
        <h6>Bonjour</h6>
        <?php endif;?>
  <strong>Discover our extended menu - plenty to enjoy!</strong>
  <a href="menu.html" class="discover_btn">Discover</a>
</div>
<?php endif; ?>

</body>
</html>