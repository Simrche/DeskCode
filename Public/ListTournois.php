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

$ajoutTournois = $bdd->prepare("INSERT INTO tournois4(titre, jeu, equipe1, equipe2, equipe3, equipe4, createur, seed, jour, 1prix, 2prix, 3prix, descr) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
if(isset($_POST['envoyer'])){
    $ajoutTournois->execute(array($_POST['titre'], $_POST['jeu'], $_POST['equipe1'], $_POST['equipe2'], $_POST['equipe3'], $_POST['equipe4'], $_SESSION['pseudo'], "lalala", $_POST['date'], $_POST['1prix'], $_POST['2prix'], $_POST['3prix'], $_POST['desc']));
}

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
