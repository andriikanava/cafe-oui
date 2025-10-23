<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fname = filter_input(INPUT_POST, "fname");
    $lname = filter_input(INPUT_POST, "lname"); 
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL); 
    $review = filter_input(INPUT_POST, "textarea");
    var_dump($_POST);  
}
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
        <header>
            <nav>
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="Aboutus.html">About Us</a></li>
                    <li><a href="Menu.html">Menu</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                    <li><a href="Impressions.html">Impressions</a></li>
                </ul>
            </nav>
            <button class="language languagebutton">NL</button>
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
                <img src="static/images/triangle_line.png" alt="triangleLine">
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
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname">

                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname">

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="myname@example.com">

                        <label for="textarea">Message:</label>
                        <textarea id="textarea" name="textarea" style="resize: none;"></textarea> 
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
                echo "<ul style='color: red;'>";
                foreach ($errors as $error) 
                {
                 echo "<li>$error</li>";
                }
                echo "</ul>";
                } else 
                {
                    echo "<p style='color: green;'>Form Submitted Successfully!</p>";
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
                    <li><a href="#" class="footertext"><b>Home</b></a></li>
                    <li><a href="#" class="footertext"><b>About Us</b></a></li>
                    <li><a href="#" class="footertext"><b>Menu</b></a></li>
                    <li><a href="#" class="footertext"><b>Contact</b></a></li>
                    <li><a href="#" class="footertext"><b>Impressions</b></a></li>
                </ul>               
            </div>
            <div class="footerillustrationbox">
                <img src="static/images/footerimg.svg" alt="macaroon illustration" class="imgfooter">
            </div>
            <div class="footerbox2">
                <p class="footertext">claire@oui-cafe.fr</p>
                <p class="footertext">+31 6 31782094</p>
                <div class="footerline2"></div>
                <p class="copyright">COPYRIGHT @ 2025 GROUP 1B</p>
            </div>
            <div class="languagebox">
                <p class="language">Fr/En</p>
            </div>
        </footer>
        
    </body>
</html>