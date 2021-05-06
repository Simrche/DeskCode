<?php
session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);

$ajoutUsers = $bdd->prepare("INSERT INTO users(users_pseudo, users_mdp, users_email) VALUES(?, ?, ?);");
$connexion =  $bdd->prepare('SELECT users_mdp FROM users WHERE users_pseudo=:pseudo');

use App\BracketForm;
use App\Site;
use App\SignInC;

require "../Autoloader.php";
Autoloader::register();


SignInC::addUser($ajoutUsers);


SignInC::connexion($connexion);

SignInC::deconnexionU();

$ajoutTournois = $bdd->prepare("INSERT INTO tournois4(titre, jeu, equipe1, equipe2, equipe3, equipe4, createur, seed, jour, 1prix, 2prix, 3prix, descr) VALUES(?, ?, ?);");


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
        <?php if (isset($_SESSION['pseudo'])) { ?>
            <form action="redirection.php" method="post">
                <div>
                    <label for="">Titre : </label><input type="text" name="titre">

                    <label for="">Date: </label><input type="date" name="date">

                    <label for="">Jeu :</label>
                    <select name="jeu" id="jeu">
                        <option value="">Jeu</option>
                        <option value="league of legends">League of legends</option>
                        <option value="rocket league">Rocket league</option>
                    </select>

                    <label for="">Nombre d'équipes: </label>
                    <select name="nombreEquipe" id="equipe">
                        <option value="">Nombre équipe</option>
                        <option value="4">4</option>
                    </select>

                    <label for="">Equipe 1</label><input type="text" name="equipe1">

                    <label for="">Equipe 2</label><input type="text" name="equipe2">

                    <label for="">Equipe 3</label><input type="text" name="equipe3">

                    <label for="">Equipe 4</label><input type="text" name="equipe4">


            <?php
            BracketForm::form()
            ?>
    </div>
    </div>

<?php } else {
            header("location:index.php");
        } ?>
</form>
</div>


<?php
Site::footerSite();
Site::scripts()
?>
</body>


</html>