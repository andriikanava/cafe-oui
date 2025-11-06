<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname"); 
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); 
    $review = filter_input(INPUT_POST, "textarea");
}
?>

<?php
$navigation=array("Home", "Over Ons", "Menu", "Contact", "Indruk");
$navigationLink=array("home_nl.php", "about_us.php", "menu.php", "contact.php", "impressions.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/styles/contact.css">
        <title>Contact</title>
    </head>
    <body>
        <header class="header">
            <nav class="nav">
            <ul class="nav-list">
                <li><a href="contact_nl dark.php" class="darkmode-change"><img src="static/images/lightmode.png" alt="Dark" class="darkmodeimg"></a></li>
                <?php
                for ($i=0; $i<count($navigation); $i++)
                {
                    echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></i>';
                }
                ?>
                <li><a href="contact.php" class="language-change">NL</a></li>
            </ul>
            </nav>
        </header>
        
        <div class="leftSpacing location">
            <h3>Locatie</h3>
            <hr>
            <div class="details">
                <p>Hoofdstraat 75</p>
                <p>7811 ED Emmen, Nederland</p>
            </div>
        </div>

        <div class="rightSpacing hours">
            <h3>Openingstijden</h3>
            <hr>
            <div class="details">
                <p>Mon-Fri 10:00-18:00</p>
                <p>Sat-Sun 11:00-17:00</p>
                <p>Ontbijt // Koffie // Wifi</p>
            </div>
        </div>
        
        <div id="googleMap" class="centerSpacing">
            <script>
                function myMap() {
                var mapProp= {
                center:new google.maps.LatLng(53.21770822600133, 6.56354717281754),
                zoom:17,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
        </div>
        
        <div class="centerSpacing getInTouch">
            <div class="vl span-50"></div>
            <h2>Kom In Contact</h2>
            <div class="vl span-25"></div>
            <p>Wij horen graag van u!</p>
        </div>
        <div class="contactWrapper">
            <div class="contactInfo">
                <h2>Neem Contact Op</h2>
            </div>
            <div class="headingLine"></div>
            <div class="contactInfo">
                <p>+31 6 31782094</p>
                <p>claire@oui-cafe.fr</p>
                <img src="static/images/triangle_line.png" alt="triangleLine" id="triangleLine">
                <br>
                <img src="static/images/facebook.png" alt="facebookImage">
                <img src="static/images/instagram.png" alt="instagramImage">
                
            </div>
            <div class="contactFormWrapper">
                <div class="filler formTop">
                    <p>Als u vragen heeft of gewoon even gedag wil zeggen, gebruik dan het formulier!</p>
                </div>
                <div class="filler formLeft"></div>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

                    <div class="formContent">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fname">Voornaam</label>
                                <input type="text" name="fname" id="fname" class="form-input">
                            </div>

                            <div class="form-group">
                                <label for="lname">Achternaam</label>
                                <input type="text" name="lname" id="lname" class="form-input">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" placeholder="mijnnaam@voorbeeld.com" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="textarea">Bericht</label>
                            <textarea id="textarea" name="textarea" placeholder="Het Beste Cafe Ooit!" class="form-input"></textarea>
                        </div>
                    </div>

                    <button type="submit" id="submit">Zeg Bonjour!</button>
                </form>
                <div class="filler formRight"></div>
                <div class="filler formCorner"></div>
                <div class="filler formBottom"></div>
                
            </div>          
        </div>
        
        <?php
            $errors = [];
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                if (empty($fname)) 
                {
                    $errors[] = "Voornaam kan niet leeg zijn.";
                } elseif (strlen($fname) < 3) 
                {
                    $errors[] = "Voornaam moet minstens 3 characters bevatten.";
                }
        
                if (empty($lname))
                {
                $errors[] = "Achternaam kan niet leeg zijn.";
                } elseif (!preg_match("/^[A-Z]/", $lname)) 
                {
                    $errors[] = "Achternaam moet starten met een hoofdletter.";
                }
        
                if (empty($_POST["email"])) 
                {
                    $errors[] = "Email kan niet leeg zijn.";
                } elseif (!$email) 
                {
                    $errors[] = "Voer een geldig Email adress in.";
                }

                if (empty($review)) 
                {
                    $errors[] = "Review kan niet leeg zijn.";
                } else 
                {
                    $wordCount = str_word_count(trim($review));
                    if ($wordCount < 3) 
                    {
                        $errors[] = "Review moet minstens 3 characters bevatten.";
                    }
                } 
                
                
                if (!empty($errors)) 
                {
                    echo "<div class='message-section-red'>";
                    echo "<ul style='color: red;'>";
                    foreach ($errors as $error) 
                    {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                } else 
                {
                    echo "<div class='message-section-green'><p style='color: green;'>Form Successful Verstuurd!</p></div>";
                }

            }
        ?>


         <!-- Footer -->

        <footer>
            <div class="footerbox1">
                <p class="footerlogo">OUI Café</p>
                <p class="footertext">Hoofdstraat 75</p>
                <p class="footertext">7811 ED Emmen, Nederland</p>
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