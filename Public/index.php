<?php
session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);

$ajoutUsers = $bdd->prepare("INSERT INTO users(users_pseudo, users_mdp, users_email) VALUES(?, ?, ?);");
$connexion =  $bdd->prepare('SELECT users_mdp FROM users WHERE users_pseudo=:pseudo');


use App\Site;
use App\SignInC;

require "../Autoloader.php";
Autoloader::register();


SignInC::addUser($ajoutUsers);


SignInC::connexion($connexion);

SignInC::deconnexionU();


?>

<!DOCTYPE html>
<html lang="fr">
<?php Site::headSite(); ?>


<body class="dark-theme">
    <?php
    SignInC::signUp();
    SignInC::logIn();

    if (empty($_SESSION['pseudo'])) {

        Site::forbiden();
    };

    ?>
    <?php
    Site::headerSite();
    ?>
    <main>
        <article id="info">
            <h1>LDV Esport</h1>
            <p>LDV ESPORT est donc une association orientée vers les jeux vidéos compétitifs et dont le but est de rayonner grâce aux performances de ses joueurs. Au travers de compétitions en lignes ou en LAN, les joueurs portent les couleurs E-sport en affrontant des équipes aussi bien amateurs que professionnelles.</p>

            <p>Ce site a pour but de créer des tournois avec ses amis tout en offrant la possibilité de les garder en mémoire afin de voire notre progression au fur et à mesure.
                Il est ouvert à tous. Utilisez le sans modération et n'hésitez pas à en parler à vos amis !
                <br> <br> <br>
                Et ce n’est qu’un début… Le meilleur est à venir !
            </p>
        </article>
        <?php if (!empty($_SESSION['pseudo'])) { ?>
            <article id="allGame">
                <h2>Les Jeux</h2>

                <article class="optionsBra">
                    <section><a href="BracketForm.php">Création de Bracket</a></section>
                    <section><a href="ListTournois.php">Mes tournois</a></section>
                </article>

            </article>
        <?php } else { ?>

            <article id="allGame">
                <h2>Tournois</h2>

                <article class="optionsBra">
                    <section class="forbidenAccess">
                        <p>Création de Bracket</p>
                    </section>
                    <section class="forbidenAccess">
                        <p>Mes tournois</p>
                    </section>
                </article>

            </article>
        <?php } ?>
    </main>


    <?php
    Site::footerSite();
    Site::scripts();
    ?>
</body>


</html>