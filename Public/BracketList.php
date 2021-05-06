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
    ?>
    <?php
    Site::headerSite();
    ?>
        <div id="BrackList">
            <h1 class="listTitle">Vos Brackets : </h1>
            <a href="./Lien">
                <div class="BrackCard">
                    <div class="BrackMakerBlock">
                        <img src="https://image.freepik.com/vecteurs-libre/esports-logo-assassin-team_70404-18.jpg" alt="">
                        <div>
                            <h2>Bracket 3</h2>
                            <p class="BrackAuth">Auteur 3</p>
                        </div>
                    </div>
                    <p class="BrackDesc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea nobis ducimus nisi ipsam. Similique labore voluptatum corporis ea unde, magni a sunt, accusamus excepturi animi harum neque mollitia. Iusto, fugiat.</p>
                </div>
            </a> 
        </div>

    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>