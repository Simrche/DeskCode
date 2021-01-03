<?php

namespace App;

abstract class Site
{

    public function __construct()
    {
    }

    public static function headSite()
    {
?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/style2.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/df1182159f.js" crossorigin="anonymous"></script>
            <title>Accueil</title>
        </head>
    <?php
    }

    public static function headerSite()
    {
    ?>
        <header>
            <article>
                <section>
                    <input list="jeu" type="text" id="choix_jeu" placeholder="Choisir un jeu" name="game">
                    <datalist id="jeu">
                        <option value="League of Legends">
                        <option value="Rocket League">
                        <option value="CS:GO">
                        <option value="FIFA 21">
                    </datalist>
                </section>
            </article>
            <article>
                <section>
                    <a class="logo" href="index.php"><img src="../img/logoLdvEsport.png" alt="logo_LDV" title="logo_LDV"></a>

                </section>
            </article>


            <article id="log">
                <section>
                    <?php if (isset($_SESSION['pseudo'])) { ?>
                        <section class="isCo">
                            <?php
                            echo "Bonjour, " . $_SESSION['pseudo'];
                            ?>
                        </section>
                    <?php } ?>
                </section>
                <section class="logButs">
                    <?php if (empty($_SESSION['pseudo'])) { ?>
                        <p class="logInBut">Se connecter</p>
                        <p class="signUpBut">S'inscrire</p>
                    <?php } else { ?>
                        <form action="#" method='post'>
                            <p class="logOutBut">
                                <input type="submit" value='Déconnexion' name='deco'>
                            </p>

                        </form>
                    <?php } ?>
                </section>

        </header>
    <?php
    }

    public static function footerSite()
    {
    ?>
        <footer>
            <a href="https://twitter.com/LDVEsport"><img src="../img/twitter.png" alt="twitter" title="twitter"></a>
            <a href="https://www.facebook.com/LDVEsport"><img src="../img/facebook.png" alt="facebook" title="facebook"></a>
            <a href="#"><img src="../img/discord.png" alt="discord" title="discord"></a>
        </footer>
    <?php
    }

    public static function scripts()
    {
    ?>
        <script src="../js/jquery-3.4.1.min.js"></script>
        <script src="../js/TweenMax.min.js"></script>
        <script src="../js/main.js"></script>
    <?php
    }
}
