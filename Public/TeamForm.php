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

    <div id="TeamForm">
        <form action="">
                <div>
                    <label for="">Nom d'équipe: </label><input type="text">

                    <label for="">Nombre de remplaçant: </label><input type="text">

                    <label for="">Chef d'équipe: </label><input type="text">

                    <label for="">Joueur 1: </label><span><input type="text">&nbsp;&nbsp;<input type="text"></span>

                    <label for="">Joueur 2: </label><span><input type="text">&nbsp;&nbsp;<input type="text"></span>

                    <label for="">Joueur 3: </label><span><input type="text">&nbsp;&nbsp;<input type="text"></span>

                    <label for="">Joueur 4: </label><span><input type="text">&nbsp;&nbsp;<input type="text"></span>

                    <label for="">Joueur 5: </label><span><input type="text">&nbsp;&nbsp;<input type="text"></span>

                    <label for="">Email: </label><input type="text">

                    <label for="">Discord: </label><input type="text">
                </div>
        </form>
    </div>
    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>