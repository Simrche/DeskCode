<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <title>Accueil</title>
    </head>

    <body>

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
                <p>Se connecter</p>
                <p>S'inscrire</p>
            </div>
        </header>

        <section id="info">
            <h1>LDV Esport</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, enim! Praesentium, alias similique tempore quos iste debitis, ratione laborum voluptatibus perspiciatis odio fuga assumenda, omnis repudiandae tempora qui adipisci aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda molestias possimus quae expedita natus sint voluptatem neque odio non doloribus tempore saepe maxime totam, voluptate ducimus ut incidunt quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt labore sed temporibus vero sint, eius minus eum facere ab saepe quo dolore obcaecati voluptate eveniet, debitis qui, soluta odio id.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, enim! Praesentium, alias similique tempore quos iste debitis, ratione laborum voluptatibus perspiciatis odio fuga assumenda, omnis repudiandae tempora qui adipisci aspernatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero assumenda molestias possimus quae expedita natus sint voluptatem neque odio non doloribus tempore saepe maxime totam, voluptate ducimus ut incidunt quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt labore sed temporibus vero sint, eius minus eum facere ab saepe quo dolore obcaecati voluptate eveniet, debitis qui, soluta odio id.</p>
        </section>

        <section id="allGame">
            <h1>Les jeux</h1>
            <div>
                <a href="LoL.php">League of Legends</a>
                <a href="#">Rocket League</a>
                <a href="#">CS:GO</a>
                <a href="#">FIFA 21</a>
                <a href="#">Jeu 5</a>
                <a href="#">Jeu 6</a>
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