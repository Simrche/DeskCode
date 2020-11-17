<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/df1182159f.js" crossorigin="anonymous"></script>
        <title>Accueil</title>
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

        <section id="info">
            <h1>LDV Esport</h1>
            <p>LDV ESPORT est donc une association orientée vers les jeux vidéos compétitifs et dont le but est de rayonner grâce aux performances de ses joueurs. Au travers de compétitions en lignes ou en LAN, les joueurs portent les couleurs  E-sport en affrontant des équipes aussi bien amateurs que professionnelles.</p>

            <p>Pour l’année 2018-2019, LDV ESPORT devient officiellement une association. Elle sera donc composée en plus des joueurs, d’étudiants voulant mettre un pied dans ce domaine afin d’apporter leur pierre à l’édifice. De nombreux événements étudiants seront mis en place tels que des compétitions et une journée à thème jeux vidéo. <br> <br>

            Et ce n’est qu’un début… Venez agrandir les rangs de l’association si vous vous sentez l’âme d’un passionné.</p>
        </section>

        <section id="allGame">
            <h1>Les jeux</h1>
            <div>
                <a href="LoL.php">League of Legends</a>
                <a href="#">Rocket League</a>
                <a href="#">CS:GO</a>
                <a href="#">FIFA 21</a>
                <a href="#">Smash Bros Ultimate</a>
                <a href="#">Call of Duty: Warzone</a>
            </div>
        </section>

        <footer>
            <a href="#"><img src="img/twitter.png" alt="twitter" title="twitter"></a>
            <a href="#"><img src="img/facebook.png" alt="facebook" title="facebook"></a>
            <a href="#"><img src="img/discord.png" alt="discord" title="discord"></a>
        </footer>
        
    </body>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/main.js"></script>
</html>