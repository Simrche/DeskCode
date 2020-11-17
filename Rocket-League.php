<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/df1182159f.js" crossorigin="anonymous"></script>

    <title>LDV E-sport</title>
</head>

<body>
    <?php include "signUp.php" ?>
    <header>
        <div id="headerPartie1">
            <input list="jeu" type="text" id="choix_jeu" placeholder="Choisir un jeu" name="game">
            <datalist id="jeu">
                <option value="League of Legends">
                <option value="Rocket League">
                <option value="CS:GO">
                <option value="FIFA 21">
            </datalist>
        </div>
        <a class="logo" href="index.php"><img src="img/logoLdvEsport.png" alt="logo_LDV" title="logo_LDV"></a>
        <div id="log">
            <p class="logInBut">Se connecter</p>
            <p class="signUpBut">S'inscrire</p>
        </div>
    </header>
    <main>
        <div class="records">
            <h2>Suivez en direct sur Twitch</h2>
            <div class="lastest">
                <div class="last">
                    <img src="img/RLcs2.jpeg" alt="#" title="#">
                    <p>Match 1</p>
                </div>

                <div class="last">
                    <img src="img/RLcs2.jpeg" alt="#" title="#">
                    <p>Match 2</p>
                </div>

                <div class="last">
                    <img src="img/RLcs2.jpeg" alt="#" title="#">
                    <p>Match 3</p>
                </div>

            </div>
        </div>
        <div class="new">
            <h2>Brackets personalisés</h2>
            <div class="brac">
                <a href="#" class="bracRo">Bracket 1</a>
                <a href="#" class="bracRo">Bracket 2</a>
                <a href="#" class="bracRo">Bracket 3</a>
                <a href="#" class="bracRo">Bracket 4</a>
                <a href="#" class="bracRo">+</a>
            </div>
        </div>
    </main>

    <footer>
        <a href="#"><img src="img/twitter.png" alt="twitter" title="twitter"></a>
        <a href="#"><img src="img/facebook.png" alt="facebook" title="facebook"></a>
        <a href="#"><img src="img/discord.png" alt="discord" title="discord"></a>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>