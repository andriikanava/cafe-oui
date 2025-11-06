<?php
$navigation=array("Home", "About Us", "Menu", "Contact", "Impressions");
$navigationLink=array("home_nl.php", "about_us.php", "menu.php", "contact.php", "impressions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/menu.css">
    <title>Menu</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
        <ul class="nav-list">
            <li><a href="menu dark_nl.php" class="darkmode-change"><img src="static/images/lightmode.png" alt="Dark" class="darkmodeimg"></a></li>
            <?php
            for ($i=0; $i<count($navigation); $i++)
            {
                echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></i>';
            }
            ?>
             <li><a href="menu.php" class="language-change">EN</a></li>
        </ul>
        </nav>
    </header>
    <section class="hero-section">
        <h1 class="hero-title">MENU</h1>
    </section>
    <section class="main-dishes">
        <div class="menu-title">
            <div class="horizontal-line"></div>
            <h2>ETEN</h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="food-menu-box">
            <div class="dish-box" id="pain-dish-box">
                <div class="dish-title">
                    <div class="vertical-line"></div>
                    <h3><b>Pain</b> Croissant or Petit Pain</h3>
                </div>
                <div class="pain-box">
                    <img src="static/images/croisant.png" alt="Croissant">
                    <div class="dish-name-box">
                        <h3>Choices:</h3>
                        <h3>Normaal</h3>
                        <h3>Boter</h3>
                        <h3>Kruiden Boter</h3>
                        <h3>Jam or Nutella</h3>
                        <h3>Brie of Camembert</h3>
                        <h3>Kaas met Walnoten</h3>
                        <h3>Roomkaas</h3>
                        <h3>Zachte Geiten Kaas</h3>
                        <h3>Gerookte Zalm</h3>
                    </div>
                </div>
            </div>

            <div class="dish-box" id="salad-dish-box">
                <div class="dish-title">
                    <div class="vertical-line"></div>
                    <h3><b>Salade</b></h3>
                </div>
                <div class="salad-box">
                    <img src="static/images/right-dishes.png" alt="Edd and tuna salads">
                    <div class="dish-name-box" id="egg-text">
                        <h3>Ei en hummus</h3>
                    </div>
                        <div class="dish-name-box" id="tuna-text">
                            <h3>Tonijn</h3>
                        </div>
                    </div>
                </div>
        </div>
        <div class="menu-title">
            <div class="horizontal-line"></div>
            <h2>ZOETE HAPJES</h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="menu-box">
            <div class="ecleir-box">
                <div class="dish-title">
                    <div class="vertical-line"></div>
                    <h3><b>Éclair</b></h3>
                </div>
                <img src="static/images/ecleir.png" alt="ecleir">
            </div>
            <div class="millefeuille-box">
                <div class="dish-title">
                    <div class="vertical-line"></div>
                    <h3><b>Millefeuille</b></h3>
                </div>
                <img src="static/images/waffels.png" alt="millefeuille">
            </div>
            <div class="creampuffs-box">
                <div class="dish-title">
                    <div class="vertical-line"></div>
                    <h3><b>Slagroomsoesjes</b></h3>
                </div>
                <img src="static/images/cupcakes.png" alt="millefeuille">
            </div>
            <div class="macaroons-box">
                <div class="macaroons-content">
                    <img src="static/images/macaroons-menu.png" alt="Croissant">
                    <div class="dish-name-box">
                        <h3>Smaken:</h3>
                        <h3>Vanille</h3>
                        <h3>Limoen</h3>
                        <h3>Framboos</h3>
                        <h3>Pistache</h3>
                        <h3>Chocolade</h3>
                    </div>
                </div>
                <div class="dish-title"> 
                    <div class="vertical-line"></div> 
                    <h3><b>Macaroons</b> (3 pieces)</h3> 
                </div>
            </div>
            <div class="pastry-box">
                <img src="static/images/pastry.png" alt="millefeuille">
            </div>
            <div class="brest-box">
                <div class="dish-title">
                    <div class="vertical-line"></div>
                    <h3><b>Paris-Brest</b></h3>
                </div>
                <img src="static/images/brest.png" alt="millefeuille">
            </div>
        </div>

        </div>
    </section>
    <section class="hot-drinks">
        <div class="menu-title">
            <div class="horizontal-line"></div>
            <h2>DRANKEN</h2>
            <div class="horizontal-line"></div>
        </div>
        <div class="background-illustrations" id="upper-background"></div>
        <div class="dish-title">
            <div class="vertical-line"></div>
            <h3><b>Koffie & Thee</b></h3>
        </div>
        <div class="coffe-menu">
            <img src="static/images/coffee.png" alt="coffe">
            <div class="dish-name-box">
                <h3>Cappuccino</h3>
                <h3>Latte</h3>
                <h3>Espresso</h3>
                <h3>Americano</h3>
                <h3>Flat White</h3>
            </div>
        </div>
        <div class="white-decoration-line"></div>
        <div class="tea-menu">
            <div class="dish-name-box">
                <h3>Zwart</h3>
                <h3>Groen</h3>
                <h3>Kruiden</h3>
                <h3>Jasmijn</h3>
            </div>
            <img src="static/images/Tea.png" alt="">
        </div>

        <div class="background-illustrations" id="bottom-background"></div>
    </section>
    <section class="cold-drinks">
        <!-- <div class="menu-title-cover"> -->
        <div class="menu-title">
            <div class="horizontal-line"></div>
            <h2>Koude Dranken</h2>
            <div class="horizontal-line"></div>            
        </div>
        <!-- </div> -->
        <div class="lemonade-box">
            <img src="static/images/lemonade.png" alt="lemonade">
            <div class="yellow-decoration-line"></div>
            <h2>Huisgemaakte Limonade</h2>
        </div>
        <div class="ice-tea-box">
            <img src="static/images/cola.png" alt="ice tea">
            <div class="yellow-decoration-line"></div>
            <h2>Huisgemaakte Ice Tea</h2>
        </div>
        <div class="juice-box">
            <img src="static/images/juice.png" alt="orange juice">
            <div class="yellow-decoration-line"></div>
            <h2>Sinaasappel Sap</h2>
        </div>
    </section>
    <section class="divider">
        <div class="horizontal-line"></div>
    </section>
    <section class="vegan-dishes">
        <div class="menu-title">
            <div class="horizontal-line"></div>
            <p>
                <h2>VEGAN VIENNOISERIE</h2>
                <img src="static/images/leaf.png" alt="vegan leaf symbol">
            </p>
            <div class="horizontal-line"></div>            
        </div>
        <div class="vegan-content-box">
            
            <img src="static/images/vegan-croisant.png" alt="vegan croisant" id="vegan-croisant-img">
            <div class="vegan-background" id="croisant-background"></div>
            <div class="horizontal-line" id="croisant-line"></div>
            <h2 id="croisant-text">Een klassieke Franse croissant, opnieuw uitgevonde met plantaardig boter — gouden, schilferig en toegeeflijk.</h2>
       
            <img src="static/images/vegan-pommes.png" alt="vegan croisant" id="vegan-pommes-img">
            <div class="vegan-background" id="pommes-background"></div>
            <div class="horizontal-line" id="pommes-line"></div>
            <h2 id="pommes-text">Goudkleurig roostergebakje gevuld met zachte gekarameliseerde appels - knapperig, licht en delicaat zoet.</h2>
        </div>
        <div class="vegan-content-box">
            
            <img src="static/images/pistache.png" alt="vegan croisant" id="vegan-croisant-img">
            <div class="vegan-background" id="croisant-background"></div>
            <div class="horizontal-line" id="croisant-line"></div>
            <h2 id="croisant-text">Bladerdeeg met een laagje pistachecrème, besprenkeld met glazuur en knapperige nootjes.</h2>
       
            <img src="static/images/bretzel.png" alt="vegan croisant" id="vegan-pommes-img">
            <div class="vegan-background" id="pommes-background"></div>
            <div class="horizontal-line" id="pommes-line"></div>
            <h2 id="pommes-text">Een zacht, goudbruin gebakje in pretzelstijl, bestrooid met sesamzaadjes: eenvoudig, rustiek en bevredigend.</h2>
        </div>
        <div class="vegan-content-box">
            
            <img src="static/images/tartine.png" alt="vegan croisant" id="vegan-croisant-img">
            <div class="vegan-background" id="croisant-background"></div>
            <div class="horizontal-line" id="croisant-line"></div>
            <h2 id="croisant-text">Ambachtelijk brood belegd met romige plantaardige kaas en kruiden - eenvoudig, vers en smaakvol.</h2>
       
            <img src="static/images/noi.png" alt="vegan croisant" id="vegan-pommes-img">
            <div class="vegan-background" id="pommes-background"></div>
            <div class="horizontal-line" id="pommes-line"></div>
            <h2 id="pommes-text">Bladerdeeg gevuld met een subtiele zoetheid en gegarneerd met geroosterde hazelnoten - knapperig, nootachtig en verfijnd.</h2>
            <div class="download-button">
                <a href="Menu.pdf">Download the MENU</a>
            </div>
        </div>

        
    </section>
    <section class="divider">
        <div class="horizontal-line"></div>
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