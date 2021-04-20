<?php
session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);

$ajoutUsers = $bdd->prepare("INSERT INTO users(users_pseudo, users_mdp, users_email) VALUES(?, ?, ?);");
$connexion =  $bdd->prepare('SELECT users_mdp FROM users WHERE users_pseudo=:pseudo');


use App\Site;
use App\SignInC;
use App\TeamForm;

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
    Site::headerSite();
    ?>
    <div id="TeamForm">
        <form action="">
            <div>
                <?php
                // if(teams==true){
                    TeamForm::theName();
                    TeamForm::members(3);

                // }
                // TeamForm::theForm();
                ?>
            </div>
        </form>
    </div>
    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>