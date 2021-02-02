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
        <div id="BrackForm">
            <form action="">
                <div>
                    <label for="">Date: </label><input type="text">
                </div>
                <div>
                    <label for="">Lieu: </label><input type="text">
                </div>
                <div>
                    <label for="">Nombre d'équipes: </label><input type="text">
                </div>
                <div>
                    <label for="">Loser Bracket: </label><input type="text">
                </div>
                <div>
                    <label for="">Match: </label><input type="text">
                </div>
                <div>
                    <label for="">Match finale: </label><input type="text">
                </div>
                <div>
                    <label for="">1er prix: </label><input type="text">
                </div>
                <div>
                    <label for="">Second Prix: </label><input type="text">
                </div>
                <div>
                    <label for="">Troisième prix: </label><input type="text">
                </div>
                <div>
                    <label for="">Description: </label><input type="text">
                </div>
            </form>
        </div>


    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>