<?php
session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);


use App\Site;
use App\SignInC;

require "../Autoloader.php";
Autoloader::register();

SignInC::deconnexionU();

$recupTournois =  $bdd->prepare('SELECT id, titre, jeu FROM tournois4 WHERE createur=:pseudo');
$recupTournois->execute(array('pseudo' => $_SESSION['pseudo']));
$recupTournoisFetch = $recupTournois->fetchAll();

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
    <main>
        <?php if (isset($_SESSION['pseudo'])) { ?>
            <h2>MES TOURNOIS</h2>
        <ul>
            <?php 
                foreach ($recupTournoisFetch as $value) { ?>
                    <li><a href="oneTournois.php?id=<?= $value["id"] ?>"><?= $value['titre'];?></a></li>
             <?php   }
            ?>
        </ul>
        <?php } else {
            header("location:index.php");
        } ?>
    </main>


    <?php
    Site::footerSite();
    Site::scripts();
    ?>
</body>


</html>
