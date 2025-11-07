<?php
$navigation=array("Home", "Over Ons", "Menu", "Contact", "Indruk");
$navigationLink=array("index.php", "about_us.php", "menu.php", "contact.php", "Impressions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/about_us.css">
    <title>Document</title>

</head>
<!-- About Us Page -->
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
        <ul class="nav-list">
            <li><a href="about_us dark.php" class="darkmode-change">Dark</a></li>
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
            Ontdek
        </h3>
    </section>

    <!-- About OUI Hisotry section -->
    <section class="aboutoui">
        <div class="about-oui-slogan">
            <div class="about-oui-line"></div>
             <p class="about-oui-text">OUI is ontstaan uit een eenvoudig idee: zeg vaker “ja”</p>
        </div>
        <div class="about-oui-info-box"></div>
        <div class="about-us-image-history">
            <img src="static/images/about_us_history_img.svg" alt="about us image history">
        </div>
        <div class="about-us-history-textbox">
            <p class="about-oui-text-header">Over OUI</p>
            <div class="about-oui-decoration-line"></div>
           <div class="oui-story"> <p class="about-oui-text">Geworteld in Franse elegantie en eenvoud is ons café meer dan alleen een plek voor koffie – het is een plek om te vertragen, van het moment te genieten en de kleine geneugten van het leven te omarmen. Geïnspireerd door de Franse levenskunst serveren we koffie, thee, croissants en lichte lekkernijen in een sfeer van rust en klasse. Met elk detail, van onze zorgvuldig gekozen kleuren tot de warme geur van vers gebak, nodigt OUI je uit om binnen te stappen, adem te halen en te genieten van het heden.</p></div>
        </div>
         <div class="about-oui-decoration-line2"></div>
    </section>

    <!-- Timelines section -->
    <section class="grid-timeline">
        <div class="timeline-text-box">
            <p class="timeline-header-text">Tijdlijn</p>
            <p class="our-story-text">Ons Verhaal</p>
        </div>
        <div class="timeline-line"></div>
        <div class="timeline-box" id="timeline-right1">
            <div class="dot"></div>
            <div class="timeline-text">
                <p class="timeline-intext-heading">De Geboorte - 2013</p>
                <p class="timeline-intext-main">Het idee van “OUI” was geboren</p>
            </div>
        </div>

        <div class="timeline-box timeline-left" id="timeline-left1">
            <div class="timeline-text">
                <p class="timeline-intext-heading">Het Begin - 2015</p>
                <p class="timeline-intext-main">OUI opende haar deuren met een eenvoudige belofte: een hoek van Frankrijk dichter bij huis brengen.</p>
            </div>
            <div class="dot"></div>
        </div>

        <div class="timeline-box" id="timeline-right2">
            <div class="dot"></div>
            <div class="timeline-text">
                <p class="timeline-intext-heading">Een Verzamel Plaats - 2017</p>
                <p class="timeline-intext-main">Het werd een dagelijks ritueel voor velen: een ontmoetingspunt gevuld met de geur van croissants</p>
            </div>
        </div>

        <div class="timeline-box timeline-left" id="timeline-left2">
            <div class="timeline-text">
                <p class="timeline-intext-heading">Vernieuwde Elegantie - 2020 </p>
                <p class="timeline-intext-main">Met een vernieuwde ruimte en sfeer omarmt OUI kalme eenvoud en introduceert veganistisch gebak om onze Franse lekkernijen voor meer gasten toegankelijk te maken.</p>
            </div>
            <div class="dot"></div>
        </div>

        <div class="timeline-box" id="timeline-right3">
            <div class="dot"></div>
            <div class="timeline-text">
                <p class="timeline-intext-heading">Heden</p>
                <p class="timeline-intext-main">OUI blijft een plek waar gasten met Franse warmte worden ontvangen. Een plek waar je ‘ja’ zegt tegen het moment, één kopje tegelijk.</p>
            </div>
        </div>

        
    </section>

    <!-- OUI Philosophy section -->
    <section class="Our-Philosophy-box">
        <div class="Our-Philosophy-square">
            <p class="Our-Philosophy-text">Onze Filosophy</p>
        </div>
        <div class="Our-Philosophy-illustartion"></div>
        <div class="line-our-philosophy1"></div>
        <div class="line-our-philosophy2"></div>
        <div class="line-our-philosophy3"></div>
        <div class="line-our-philosophy4"></div>
        <div class="line-our-philosophy5"></div>
        <div class="Our-Philosophy-box-left">
            <p class="Our-Philosophy-header-text">Elegantie</p>
            <p class="Our-Philosophy-main-text">Geïnspireerd door Franse verfijning, geloven wij dat schoonheid in de details zit - van de ronding van een croissant tot de kleur van onze muren. Elegantie is voor ons stil, tijdloos en moeiteloos.</p>
        </div>
        <div class="Our-Philosophy-box-middle1">
            <p class="Our-Philosophy-header-text">Simpliciteit</p>
            <p class="Our-Philosophy-main-text">Het leven zit vol lawaai. OUI biedt het tegenovergestelde. Strak design, opgeruimde ruimtes en eerlijke smaken herinneren ons eraan dat minder echt meer kan zijn.</p>
        </div>
        <div class="Our-Philosophy-box-right">
            <p class="Our-Philosophy-header-text">Aanwezigheid</p>
            <p class="Our-Philosophy-main-text">Een kopje koffie is meer dan een drankje – het is een pauze. We nodigen onze gasten uit om even te vertragen, adem te halen en van het moment te genieten, slokje voor slokje.</p>
        </div>
        <div class="Our-Philosophy-box-middle2">
            <p class="Our-Philosophy-header-text">Inclusiviteit</p>
            <p class="Our-Philosophy-main-text">Een tafel voor iedereen, met veganistische zoetigheden en lekkernijen, speciaal samengesteld om alle gasten op hun eigen manier te laten genieten van de Franse smaken.</p>
        </div>
        <div class="line-our-philosophy-bottom"></div>
        <div class="line-our-philosophy-bottomvertical"></div>
    </section>

    <!-- OUI Philosophy section closing part -->
    <section class="OUI-Philosophy-section-box">
        <div class="quote-box">
            <p class="quote-text">Bij OUI draait het niet alleen om koffie, maar om mensen. Onze gasten brengen het café tot leven en maken er een warme en levendige ontmoetingsplek van.</p>
        </div>
        <div class="Image-Philosophy-box">
            <img src="static/images/phislosphy image.svg" alt="Family-Philosophy-image">
        </div>
        <div class="philosophy-section-line"></div>
        <div class="catch-phrase-philosophy-box">
            <p class="catch-phrase-philosophy-text">Zeg ja tegen het moment - één kopje tegelijk.</p>
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
