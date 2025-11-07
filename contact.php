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
$navigation=array("Home", "About Us", "Menu", "Contact", "Impressions");
$navigationLink=array("home.php", "about_us.php", "menu.php", "contact.php", "Impressions.php");
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
                <li><a href="contact dark.php" class="darkmode-change"><img src="static/images/lightmode.png" alt="Dark" class="darkmodeimg"></a></li>
                <?php
                for ($i=0; $i<count($navigation); $i++)
                {
                    echo '<li><a href="'.$navigationLink[$i]. '">'. $navigation[$i]. '</a></i>';
                }
                ?>
                <li><a href="contact_nl.php" class="language-change">NL</a></li>
            </ul>
            </nav>
        </header>
        
        <div class="leftSpacing location">
            <h3>Location</h3>
            <hr>
            <div class="details">
                <p>Hoofdstraat 75</p>
                <p>7811 ED Emmen, The Netherlands</p>
            </div>
        </div>

        <div class="rightSpacing hours">
            <h3>Hours</h3>
            <hr>
            <div class="details">
                <p>Mon-Fri 10:00-18:00</p>
                <p>Sat-Sun 11:00-17:00</p>
                <p>Breakfast // Coffee // Wifi</p>
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
            <h2>Get In Touch</h2>
            <div class="vl span-25"></div>
            <p>We would like to hear from you!</p>
        </div>
        <div class="contactWrapper">
            <div class="contactInfo">
                <h2>Contact Us</h2>
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
                    <p>If you have any inquiries or just want to say hi, please use the contact form!</p>
                </div>
                <div class="filler formLeft"></div>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

                    <div class="formContent">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-input">
                            </div>

                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-input">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" placeholder="myname@example.com" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="textarea">Message</label>
                            <textarea id="textarea" name="textarea" placeholder="The Best Cafe Ever!" class="form-input"></textarea>
                        </div>
                    </div>

                    <button type="submit" id="submit">Say Bonjour!</button>
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
                    $errors[] = "First name cannot be empty.";
                } elseif (strlen($fname) < 3) 
                {
                    $errors[] = "First name must be at least 3 letters long.";
                }
        
                if (empty($lname))
                {
                $errors[] = "Last name cannot be empty.";
                } elseif (!preg_match("/^[A-Z]/", $lname)) 
                {
                    $errors[] = "Last name must start with a capital letter.";
                }
        
                if (empty($_POST["email"])) 
                {
                    $errors[] = "Email cannot be empty.";
                } elseif (!$email) 
                {
                    $errors[] = "Please enter a valid email address.";
                }

                if (empty($review)) 
                {
                    $errors[] = "Comments cannot be empty.";
                } else 
                {
                    $wordCount = str_word_count(trim($review));
                    if ($wordCount < 3) 
                    {
                        $errors[] = "Comments must contain at least 3 words.";
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
                    echo "<div class='message-section-green'><p style='color: green;'>Form Submitted Successfully!</p></div>";
                }

            }
        ?>


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