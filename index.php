<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Designoshow 2022</title>
</head>
<body>
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
                <p>21 juni, 18u30 @Stadschouwburg, Mechelen</p>
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
                <p>21 juni, 18u30 @Stadschouwburg, Mechelen</p>
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
            <p class="pixel"><span class="pixel">v</span> Sign up <span class="pixel">v</span></p>
        </section>
    </header>   
    <div class="sign_up" id="sign_up">
        <h2 class="bold">Signosaurus up</h2>
        <p>Be there or be rectangular.</p>
        <p>Sign up for dino&#39;s performing live on stage.</p>
        <form action="" method="POST">
            <input placeholder="First name" type="text" name="first_name" id="">
            <input placeholder="Last name" type="text" name="last_name" id="">
            <input placeholder="E-mail" type="text" name="email" id="">
            <div class="agree">
                <div class="checkbox_replace">
                    <input class="checkbox" type="checkbox" name="" id="">
                    <img src="./assets/checkmark.svg" alt="">
                </div>
                <p>I agree to getting updates on this event by mail</p>
            </div>
            <div class="raawrcaptcha">
                <div class="checkbox_replace">
                    <input class="checkbox" type="checkbox" name="" id="">
                    <img src="./assets/checkmark.svg" alt="">
                </div>
                <p>I'm not a dino</p>
                <div class="raawrcaptcha_icon">
                    <img src="assets/raawrcaptcha.svg" alt="">
                    <p>raawrcaptcha</p>
                </div>
            </div>
            <button class="button" type="submit" name="submit">Sign up</button>
            <div class="select_dinos">
                <div class="description">
                    <p>Select all images with</p>
                    <p>dinos</p>
                </div>
                <div class="dinos">
                    <img src="./assets/insta/Stephan.jpg" alt="">
                    <img src="./assets/insta/Sarah.jpg" alt="">
                    <img src="./assets/insta/Linde_en_David.jpg" alt="">
                    <img src="./assets/insta/Brian.jpg" alt="">
                    <img src="./assets/insta/Bastien.jpg" alt="">
                    <img src="./assets/insta/Tom.jpg" alt="">
                    <img src="./assets/insta/Stefan.jpg" alt="">
                    <img src="./assets/insta/Bailey.jpg" alt="">
                    <img src="./assets/insta/Nathalie.jpg" alt="">
                </div>
            </div>
        </form>
    </div>
    <div class="program">
        <h2 class="bold">T-program Rex</h2>
        <p>We would like to welcome y’all to a dinoshow so great and <br>formidable that even a comet can’t take it down.</p>
        <div class="schedule">
            <div class="schedule_item schedule_item_1">
                <p class="time pixel">18u30</p>
                <p class="description regular">Doors open @Stadschouwburg, Mechelen</p>
                <p class="extra regular">Something dumb</p>
            </div>
            <div class="schedule_item schedule_item_2">
                <p class="time pixel">19u00</p>
                <p class="description regular">Start Dinoshow</p>
                <p class="extra regular">Some funny text</p>
            </div>
            <div class="schedule_item schedule_item_3">
                <p class="time pixel">21u00</p>
                <p class="description regular">Einde show & start receptie</p>
                <p class="extra regular">More funny text</p>
            </div>
            <div class="schedule_item schedule_item_4">
                <p class="time pixel">22u30</p>
                <p class="description regular">Einde</p>
                <p class="extra regular">Ya you get it</p>
            </div>
        </div>
    </div>
    <div class="blocks">
        <div class="dresscode">
            <h2 class="bold">A dresscode, rlly?</h2>
            <p>Old school red carpet chique with a touch of crazy. Win a prize with the best outfit</p>
            <a class="pixel" href="#">View outfit moodboard</a>
        </div>
        <div class="convinced">
            <h2 class="bold">Convinced now?</h2>
            <p>Some dumb text Some dumb</p>
            <a href="#sign_up" class="button pixel">Sign up</a>
        </div>
    </div>
    <footer>
        <a href="https://www.designosource.be"><img src="./assets/logo-designosource-wit.svg" alt="Designosource logo"></a>
        <img src="./assets/logo_dinoshow.svg" alt="logo dino show" class="dinoshow">
        <a href="https://www.thomasmore.be"><img src="./assets/logo-thomas-more-university-college.png" alt="logo Thomas More"></a>
    </footer>
    <script src="./js/index.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
</body>
</html>