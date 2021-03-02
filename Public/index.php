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


<body class="light-theme">
    <?php
    SignInC::signUp();
    SignInC::logIn();
    ?>
    <?php
    Site::headerSite();
    ?>
    <main>
        <article id="info">
            <h1>LDV Esport</h1>
            <p>LDV ESPORT est donc une association orientée vers les jeux vidéos compétitifs et dont le but est de rayonner grâce aux performances de ses joueurs. Au travers de compétitions en lignes ou en LAN, les joueurs portent les couleurs E-sport en affrontant des équipes aussi bien amateurs que professionnelles.</p>

            <p>
                Pour l’année 2018-2019, LDV ESPORT devient officiellement une association. Elle sera donc composée en plus des joueurs, d’étudiants voulant mettre un pied dans ce domaine afin d’apporter leur pierre à l’édifice. De nombreux événements étudiants seront mis en place tels que des compétitions et une journée à thème jeux vidéo.
                <br> <br> <br>
                Et ce n’est qu’un début… Venez agrandir les rangs de l’association si vous vous sentez l’âme d’un passionné.
            </p>
        </article>

        <article id="allGame">
            <h2>Les Jeux</h2>
            <article class="optionsBra">
                <section><a href="BracketForm.php">Création de Bracket</a></section>
                <section><a href="#">Rejoindre un bracket déjà existant</a></section>
                <section><a href="#">PLACEHOLDER</a></section>
            </article>

        </article>
    </main>


    <?php
    Site::footerSite();
    Site::scripts();
    ?>
</body>


</html>