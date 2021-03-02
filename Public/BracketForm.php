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
        <div id="BrackForm">
            <form action="">
                <div>
                    <label for="">Date: </label><input type="text">

                    <label for="">Lieu: </label><input type="text">

                    <label for="">Nombre d'équipes: </label><input type="text">

                    <label for="">Loser Bracket: </label><div><input type="radio" name="LoserRad">OUI<input type="radio" name="LoserRad">NON</div>

                    <label for="">Match: </label>
                    <select name="pets" id="pet-select">
                        <option value="">--Please choose an option--</option>
                        <option value="bo1">BO1</option>
                        <option value="bo2">BO3</option>
                        <option value="bo3">BO5</option>
                    </select>

                    <label for="">Match finale: </label><div><input type="radio" name="FinalRad">BO1<input type="radio" name="FinalRad">BO3<input type="radio" name="FinalRad">BO5</div>

                    <label for="">1er prix: </label><input type="text">

                    <label for="">Second Prix: </label><input type="text">

                    <label for="">Troisième prix: </label><input type="text">

                    <label for="">Description: </label><textarea></textarea>
                </div>
            </form>
        </div>


    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>