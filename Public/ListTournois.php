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
        <?php if (isset($_SESSION['pseudo'])) { ?>
            <div id="BrackList">
            <h1 class="listTitle">Mes Tournois : </h1> 
            <?php 
                foreach ($recupTournoisFetch as $value) { ?>
                <a href="oneTournois.php?id=<?= $value["id"] ?>">
                    <div class="BrackCard">
                        <div class="BrackMakerBlock">
                            <div>
                                <h2><?= $value['titre'];?></h2>
                                <p class="BrackAuth">Auteur 3</p>
                            </div>
                        </div>
                        <p class="BrackDesc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea nobis ducimus nisi ipsam. Similique labore voluptatum corporis ea unde, magni a sunt, accusamus excepturi animi harum neque mollitia. Iusto, fugiat.</p>
                    </div>
                </a>
             <?php   }
            ?>
        </div>
        <?php } else {
            header("location:index.php");
        } ?>


    <?php
    Site::footerSite();
    Site::scripts();
    ?>
</body>


</html>
