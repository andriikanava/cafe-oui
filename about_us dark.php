<?php
$navigation=array("Home", "About Us", "Menu", "Contact", "Impressions");
$navigationLink=array("index dark.php", "about_us dark.php", "menu dark.php", "contact dark.php", "impressions dark.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/about_us dark.css">
    <title>Document</title>

</head>
<!-- About Us Page -->
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
        <ul class="nav-list">
            <li><a href="about_us.php" class="darkmode-change"><img src="static/images/darkmode.png" alt="Light" class="darkmodeimg"></a></li>
            <?php
            for ($i=0; $i<count($navigation); $i++)
            {
                echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></i>';
            }
            ?>
             <li><a href="" class="language-change">NL</a></li>
        </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="Hero">
        <img src="static/images/OurStoryHeroSection.svg" alt="Our Story" class="HeroImage">
        <h3 class="DiscoverText">
            Discover
        </h3>
    </section>

    <!-- About OUI Hisotry section -->
    <section class="aboutoui">
        <div class="about-oui-slogan">
            <div class="about-oui-line"></div>
             <p class="about-oui-text">OUI was born from a simple idea: say “yes” more often.</p>
        </div>
        <div class="about-oui-info-box"></div>
        <div class="about-us-image-history">
            <img src="static/images/about_us_history_img.svg" alt="about us image history">
        </div>
        <div class="about-us-history-textbox">
            <p class="about-oui-text-header">About OUI</p>
            <div class="about-oui-decoration-line"></div>
           <div class="oui-story"> <p class="about-oui-text">Rooted in French elegance and simplicity, our café is more than just a place for coffee—it’s a space to slow down, enjoy the moment, and embrace life’s small pleasures. Inspired by the French art of living, we serve coffee, tea, croissants, and light treats in an atmosphere of calm and class. With every detail, from our carefully chosen colors to the warm aroma of fresh pastries, OUI is an invitation to step in, breathe, and savor the present.</p></div>
        </div>
         <div class="about-oui-decoration-line2"></div>
    </section>

    <!-- Timelines section -->
    <section class="grid-timeline">
        <div class="timeline-text-box">
            <p class="timeline-header-text">Timeline</p>
            <p class="our-story-text">Our Story</p>
        </div>
        <div class="timeline-line"></div>
        <div class="timeline-box" id="timeline-right1">
            <div class="dot"></div>
            <div class="timeline-text">
                <p class="timeline-intext-heading">The birth - 2013</p>
                <p class="timeline-intext-main">The idea of “OUI” was born</p>
            </div>
        </div>

        <div class="timeline-box timeline-left" id="timeline-left1">
            <div class="timeline-text">
                <p class="timeline-intext-heading">The beginning - 2015</p>
                <p class="timeline-intext-main">OUI opened its doors with a simple promise: to bring a corner of France closer to home.</p>
            </div>
            <div class="dot"></div>
        </div>

        <div class="timeline-box" id="timeline-right2">
            <div class="dot"></div>
            <div class="timeline-text">
                <p class="timeline-intext-heading">The birth - 2013</p>
                <p class="timeline-intext-main">The idea of “OUI” was born</p>
            </div>
        </div>

        <div class="timeline-box timeline-left" id="timeline-left2">
            <div class="timeline-text">
                <p class="timeline-intext-heading">Renewed Elegance - 2020 </p>
                <p class="timeline-intext-main">With a refreshed space and atmosphere, OUI embraced calm simplicity and introduced vegan pastries to make our French delights accessible to more guests.</p>
            </div>
            <div class="dot"></div>
        </div>

        <div class="timeline-box" id="timeline-right3">
            <div class="dot"></div>
            <div class="timeline-text">
                <p class="timeline-intext-heading">Today</p>
                <p class="timeline-intext-main">OUI continues to be a space where guests are welcomed with French warmth - a place to say yes to the moment, one cup at a time.</p>
            </div>
        </div>

        
    </section>

    <!-- OUI Philosophy section -->
    <section class="Our-Philosophy-box">
        <div class="Our-Philosophy-square">
            <p class="Our-Philosophy-text">Our Philosophy</p>
        </div>
        <div class="Our-Philosophy-illustartion"></div>
        <div class="line-our-philosophy1"></div>
        <div class="line-our-philosophy2"></div>
        <div class="line-our-philosophy3"></div>
        <div class="line-our-philosophy4"></div>
        <div class="line-our-philosophy5"></div>
        <div class="Our-Philosophy-box-left">
            <p class="Our-Philosophy-header-text">Elegance</p>
            <p class="Our-Philosophy-main-text">Inspired by French refinement, we believe beauty is found in the details - from the curve of a croissant to the tone of our walls. Elegance for us is quiet, timeless, and effortless.</p>
        </div>
        <div class="Our-Philosophy-box-middle1">
            <p class="Our-Philosophy-header-text">Simplicity</p>
            <p class="Our-Philosophy-main-text">Life is full of noise. OUI offers the opposite. Clean design, uncluttered spaces, and honest flavors remind us that less can truly be more.</p>
        </div>
        <div class="Our-Philosophy-box-right">
            <p class="Our-Philosophy-header-text">Presence</p>
            <p class="Our-Philosophy-main-text">A cup of coffee is more than a drink — it's a pause. We invite our guests to slow down, breathe, and enjoy the moment, one sip at a time.</p>
        </div>
        <div class="Our-Philosophy-box-middle2">
            <p class="Our-Philosophy-header-text">Inclusivity</p>
            <p class="Our-Philosophy-main-text">A table for everyone, with vegan pastries and treats created to let all guests savor French flavors in their own way.</p>
        </div>
        <div class="line-our-philosophy-bottom"></div>
        <div class="line-our-philosophy-bottomvertical"></div>
    </section>

    <!-- OUI Philosophy section closing part -->
    <section class="OUI-Philosophy-section-box">
        <div class="quote-box">
            <p class="quote-text">OUI isn't just about coffee, it's about people. Our guests bring the café to life, making it a warm and vibrant meeting place.</p>
        </div>
        <div class="Image-Philosophy-box">
            <img src="static/images/phislosphy image.svg" alt="Family-Philosophy-image">
        </div>
        <div class="philosophy-section-line"></div>
        <div class="catch-phrase-philosophy-box">
            <p class="catch-phrase-philosophy-text">Say yes to the moment - one cup at a time.</p>
        </div>
    </section>
    
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
