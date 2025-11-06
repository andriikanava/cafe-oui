<?php
$navigation=array("Home", "About Us", "Menu", "Contact", "Impressions");
$navigationLink=array("home dark.php", "about_us dark.php", "menu dark.php", "contact dark.php", "impressions dark.php");
?>

<!DOCTYPE html> <!-- Home Page Dark (EN) -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 1.0">
    <title>oui Home Page</title>
    <link rel="stylesheet" href="static/styles/home dark.css">
</head>
<body>
    <div class="mainGrid">
        <header>
        <nav class="nav">
        <ul class="nav-list">
            <li><a href="home.php" class="darkmode-change"><img src="static/images/darkmode.png" alt="Light" class="darkmodeimg"></a></li>
            <?php
            for ($i=0; $i<count($navigation); $i++)
            {
                echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></i>';
            }
            ?>
             <li><a href="home_nl dark.php" class="language-change">NL</a></li>
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
                <h3 class="bounce">Discover</h3>
            </div>
        </div>
        <div class="content">
            <div class="textc1">
                <h3>A French Cafe in Emmen</h3>
            </div>
            <div class="vl1"></div>
            <div class="textc2">
                <h3>OUI is a French café built on simplicity, elegance, and the joy of saying “yes”. We serve coffee, tea, croissants, and light treats in a calm, refined atmosphere—an invitation to pause and savor the moment.</h3>
            </div>    
            <div class="vl2"></div> <!--Vertical Line-->
            <div class="rectangle1">
                <div class="left">
                    <div class="textl">
                        <h2 class="history">A brief Cafe's History</h2>
                        <div class="historyUnderline"></div>
                    </div>   
                    <div class="textl">
                        <div class="briefIntroText">
                            <p>In 2015, OUI opened with a simple promise: to create a place where people could pause and enjoy life's small moments. By 2017, it had become a daily ritual for many — a meeting point filled with the scent of croissants and the warmth of conversation. In 2020, OUI embraced a renewed elegance, refining its space into an atmosphere of calm simplicity.</p> 
                            <p class="todayText">Today, it remains a place to <span class="bold">say yes to the moment</span> — one cup at a time.</p>
                        </div>
                    </div>
                    <a href="" class="readMore">Read More</a>
                </div>
                <div class="right">
                    <img class="cafebw" src="static/images/cafebw.svg" alt="black and white">
                </div>
            </div>
            <div class="vl2"></div>  <!--Vertical Line-->
            <div class="rectangle2">
                <div class="browse">
                    <a class="browseLink" href="">Browse Through Our Gallery</a>
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
                        <h2 class="popular">Most Popular Choices</h2>
                        </div>
                        <div class="images">
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image1.png" alt=""></a>
                                <h4 class="choicesText">Fresh Coffee</h4>
                                <div class="hl2"></div>
                            </div>
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image2.png" alt=""></a>
                                <h4 class="choicesText">Tasty Croissant</h4>
                                <div class="hl2"></div>
                            </div>
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image3.png" alt=""></a>
                                <h4 class="choicesText">Natural Tea</h4>
                                <div class="hl2"></div>
                            </div>
                            <div>
                                <a href=""><img class="imgHover" src="static/images/Choices_Image4.png" alt=""></a>
                                <h4 class="choicesText">Colorful Merengue</h4>
                                <div class="hl2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="menuLink" href="menu.php">Check Out The Menu</a>
            </div>
            <div class="rectangle4">
                <img class="veganOptions" src="static/images/veganOptions.svg" alt="">
                <div class="veganLinkContent">
                    <a class="veganLink" href="">Browse through our vegan options</a>
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