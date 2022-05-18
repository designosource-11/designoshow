<?php
    if(!empty($_POST)) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        if (!empty($_POST['updates']) && !empty($first_name) && !empty($last_name) && !empty($email)) {
            // $conn = new mysqli("localhost", "root", "root", "dinoshow");
            $conn = new mysqli("ID130716_designoshow.db.webhosting.be", "ID130716_designoshow", "XGgr%QBkqEj5", "ID130716_designoshow");
            $guests = $conn->query("insert into guests (first_name, last_name, email, updates) values ('".$conn->real_escape_string($first_name)."', '".$conn->real_escape_string($last_name)."', '".$conn->real_escape_string($email)."', '".$conn->real_escape_string(1)."')");
            $success = "<p class='message success'>Woop Woop! You are signed up for the show. Keep an eye on your mailbox for updates.</p>";
            session_start();
            $_SESSION["message"] = $success;
        } else if (empty($_POST['updates']) || empty($first_name) || empty($last_name) || empty($email)){
            $error = "<p class='message error'>Please fill in all the fields</p>";
            session_start();
            $_SESSION["message"] = $error;
        } else {
            $error = "<p class='message error'>Aargh, something went wrong... Send a mail to info@designosource.be</p>";
            session_start();
            $_SESSION["message"] = $error;
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/png" href="./assets/favicon.png">

    <!-- Cookie consent -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <title>Dinoshow 2022</title>
</head>
<body>
    <!-- <div class="container"> -->
        <header>
            <section class="header">
                <lottie-player
                        id="logo-lottie"
                        src="assets/logoAnimation.json"
                        speed="1"
                        class="logo"
                        loop
                        autoplay
                ></lottie-player>
                <div class="header_text">
                    <h2 class="pixel">Get your <span>&#42;</span>ss over to</h2>
                    <h1 class="bold">The Dinoshow</h1>
                    <p>21st of June, 18.30h @Stadsschouwburg, Mechelen</p>
                </div>
                <div class="fien">
                    <img class="fien_1" src="./assets/team/teammember-1.jpg">
                    <img class="fien_2 hidden" src="./assets/team/teammember-1.jpg">
                    <img class="fien_3 hidden" src="./assets/team/teammember-1.jpg">
                </div>
                <div class="sarah">
                    <img class="sarah_1" src="./assets/team/teammember-6.jpg">
                    <img class="sarah_2 hidden" src="./assets/team/teammember-6.jpg">
                    <img class="sarah_3 hidden" src="./assets/team/teammember-6.jpg">
                </div>
                <div class="brian">
                    <img class="brian_1" src="./assets/team/teammember-5.jpg">
                    <img class="brian_2 hidden" src="./assets/team/teammember-5.jpg">
                    <img class="brian_3 hidden" src="./assets/team/teammember-5.jpg">
                </div>
                <div class="nicolas">
                    <img class="nicolas_1" src="./assets/team/teammember-7.jpg">
                    <img class="nicolas_2 hidden" src="./assets/team/teammember-7.jpg">
                    <img class="nicolas_3 hidden" src="./assets/team/teammember-7.jpg">
                </div>
                <div class="bailey">
                    <img class="bailey_1" src="./assets/team/teammember-4.jpg">
                    <img class="bailey_2 hidden" src="./assets/team/teammember-4.jpg">
                    <img class="bailey_3 hidden" src="./assets/team/teammember-4.jpg">
                </div>
                <div class="bastien">
                    <img class="bastien_1" src="./assets/team/teammember-3.jpg">
                    <img class="bastien_2 hidden" src="./assets/team/teammember-3.jpg">
                    <img class="bastien_3 hidden" src="./assets/team/teammember-3.jpg">
                </div>
                <div class="stefan">
                    <img class="stefan_1" src="./assets/team/teammember-10.jpg">
                    <img class="stefan_2 hidden" src="./assets/team/teammember-10.jpg">
                    <img class="stefan_3 hidden" src="./assets/team/teammember-10.jpg">
                </div>
                <div class="nick">
                    <img class="nick_1" src="./assets/team/teammember-11.jpg">
                    <img class="nick_2 hidden" src="./assets/team/teammember-11.jpg">
                    <img class="nick_3 hidden" src="./assets/team/teammember-11.jpg">
                </div>
                <div class="stephanie">
                    <img class="stephanie_1" src="./assets/team/teammember-2.jpg">
                    <img class="stephanie_2 hidden" src="./assets/team/teammember-2.jpg">
                    <img class="stephanie_3 hidden" src="./assets/team/teammember-2.jpg">
                </div>
                <div class="ilya">
                    <img class="ilya_1" src="./assets/team/teammember-8.jpg">
                    <img class="ilya_2 hidden" src="./assets/team/teammember-8.jpg">
                    <img class="ilya_3 hidden" src="./assets/team/teammember-8.jpg">
                </div>
                <div class="nathalie">
                    <img class="nathalie_1" src="./assets/team/teammember-9.jpg">
                    <img class="nathalie_2 hidden" src="./assets/team/teammember-9.jpg">
                    <img class="nathalie_3 hidden" src="./assets/team/teammember-9.jpg">
                </div>
            </section>
            <section class="header_mobile">
                <lottie-player
                        id="logo-lottie"
                        src="assets/logoAnimation.json"
                        speed="1"
                        class="logo"
                        loop
                        autoplay
                ></lottie-player>
                <div class="header_text">
                    <h2 class="pixel">Get your <span>&#42;</span>ss over to</h2>
                    <h1 class="bold">The Dinoshow</h1>
                    <p>21st of June, 18.30h @Stadsschouwburg, Mechelen</p>
                </div>
                <div class="dino1">
                    <img class="dino1_1" src="">
                    <img class="dino1_2" src="">
                    <img class="dino1_3" src="">
                </div>
                <div class="dino2">
                    <img class="dino2_1" src="">
                    <img class="dino2_2" src="">
                    <img class="dino2_3" src="">
                </div>
                <div class="dino3">
                    <img class="dino3_1" src="">
                    <img class="dino3_2" src="">
                    <img class="dino3_3" src="">
                </div>
            </section>
            <section class="cta">        
                <a href="#sign_up" class="pixel cta"><span class="pixel">v</span> Sign up <span class="pixel">v</span></a>
            </section>
        </header>   
        <div class="sign_up" id="sign_up">
            <h2 class="bold">Signosaurus up</h2>
            <p>Be there or be rectangular.</p>
            <p>Sign up for dino&#39;s performing live on stage.</p>
            <?php if(!empty($_SESSION["message"])): ?>
                <?php echo $_SESSION["message"] ;?>
            <?php endif; ?>
            <form action="#sign_up" method="POST">
                <input placeholder="First name" type="text" name="first_name">
                <input placeholder="Last name" type="text" name="last_name">
                <input placeholder="E-mail" type="text" name="email">
                <div class="agree">
                    <div class="checkbox_replace">
                        <input class="checkbox" type="checkbox" name="updates" unchecked>
                        <img src="./assets/checkmark.svg" alt="">
                    </div>
                    <p>I agree to getting updates on this event by mail (max. 3 mails) *</p>
                </div>
                <div class="raawrcaptcha">
                    <div class="checkbox_replace">
                        <input class="checkbox" type="checkbox" name="raawr">
                        <img src="./assets/checkmark.svg" alt="">
                    </div>
                    <p>I&#39;m not a dino</p>
                    <div class="raawrcaptcha_icon">
                        <img src="assets/raawrcaptcha.svg" alt="">
                        <p>raawrcaptcha</p>
                    </div>
                </div>
                <button class="button" type="submit" name="submit">Sign up</button>
                <a href="privacypolicy.html" class="policy">Privacy policy</a>
                <div class="select_dinos">
                    <div class="description">
                        <p>Select all images with</p>
                        <p>dinos</p>
                    </div>
                    <div class="dinos">
                        <img class="raawr_dino" src="./assets/insta/Stephan.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Sarah.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Linde_en_David.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Brian.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Bastien.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Tom.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Stefan.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Bailey.jpg" alt="">
                        <img class="raawr_dino" src="./assets/insta/Nathalie.jpg" alt="">
                    </div>
                    <p class="button pixel">Check</p>
                </div>
            </form>
        </div>
        <div class="program">
            <h2 class="bold">T-program Rex</h2>
            <p>We would like to welcome y&#39;all to a dinoshow so great and <br>formidable that even an asteroid can&#39;t take it down.</p>
            <div class="schedule">
                <div class="schedule_item schedule_item_1">
                    <p class="time pixel">18.30h</p>
                    <p class="description regular">Doors open @Stadsschouwburg, Mechelen</p>
                    <p class="extra regular">It&#39;ll be safe from the asteroids, we promise</p>
                </div>
                <div class="schedule_item schedule_item_2">
                    <p class="time pixel">19.00h</p>
                    <p class="description regular">Start Dinoshow</p>
                    <p class="extra regular">No raaaawrs during the show ok?</p>
                </div>
                <div class="schedule_item schedule_item_3">
                    <p class="time pixel">21.00h</p>
                    <p class="description regular">Einde show & start receptie</p>
                    <p class="extra regular">Exclusive meet and greet with the dino&#39;s</p>
                </div>
                <div class="schedule_item schedule_item_4">
                    <p class="time pixel">22.30h</p>
                    <p class="description regular">Einde</p>
                    <p class="extra regular">Go ahead, on to your own caves now will ya?</p>
                </div>
            </div>
        </div>
        <div class="blocks">
            <div class="dresscode">
                <h2 class="bold">A dresscode, rlly?</h2>
                <p>Old school red carpet chique with a touch of crazy. Win a prize with the best outfit</p>
                <a class="pixel" href="https://www.pinterest.com/fiengerardi/dresscode-x-designoshow/" target="_blank">View outfit moodboard</a>
            </div>
            <div class="convinced">
                <h2 class="bold">Convinced now?</h2>
                <p>Then act up like a velociraptor and get your ass to the signup page. You don&#39;t want to miss this!</p>
                <a href="#sign_up" class="button pixel">Sign up</a>
            </div>
        </div>
        <footer>
            <a href="https://www.designosource.be" target="_blank"><img src="./assets/logo-designosource-wit.svg" alt="Designosource logo"></a>
            <img src="./assets/logo_dinoshow.svg" alt="logo dino show" class="dinoshow">
            <a href="https://www.thomasmore.be" target="_blank"><img src="./assets/logo-thomas-more-university-college.png" alt="logo Thomas More"></a>
        </footer>

    <!-- Cookie consent -->
    <script src="./js/GTM.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#2489E7"
                },
                "button": {
                    "background": "#f1d600"
                }
            },
            "position": "bottom-right",
            "type": "opt-in",
            "content": {
                "message": "RAWR! We too use cookies!",
                "dismiss": "Got it!",
                "allow": "Accept",
                "link": "Learn more",
                "href": "https://designosource.be/cookiepolicy"
            },
            onStatusChange: function (status) {
                var type = this.options.type;
                var didConsent = this.hasConsented();
                if (didConsent) {
                    initGTM(window, document, 'script', 'dataLayer', 'GTM-MLRF65L');
                }
                if (!didConsent) {
                    stopGTM();
                }
            },
            onInitialise: function (status) {
                var type = this.options.type;
                var didConsent = this.hasConsented();
                if (didConsent) {
                    initGTM(window, document, 'script', 'dataLayer', 'GTM-MLRF65L');
                }
                if (!didConsent) {
                    stopGTM();
                }
            },
        });
    </script>
    <!-- END Cookie consent -->

    <script src="./js/index.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
</body>
</html>