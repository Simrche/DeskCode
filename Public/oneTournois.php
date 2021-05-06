<?php
session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);


use App\Site;
use App\SignInC;

require "../Autoloader.php";
Autoloader::register();

SignInC::deconnexionU();

$recupTournois =  $bdd->prepare('SELECT id, titre, jeu, equipe1, equipe2, equipe3, equipe4, vainqueur1, vainqueur2, vainqueur3, createur, descr, 1prix, 2prix, 3prix FROM tournois4 WHERE id=:id');
$recupTournois->execute(array('id' => $_GET['id']));
$recupTournoisFetch = $recupTournois->fetch();

if(isset($_POST['1'])) {
    $vainqueur1 = $bdd->prepare("UPDATE tournois4 SET vainqueur1 = :nouveau");
    $vainqueur1->execute(array('nouveau' => $recupTournoisFetch['equipe1']));
    header('location: oneTournois.php?id=' . $_GET['id'] . "'");
}

if(isset($_POST['2'])) {
    $vainqueur1 = $bdd->prepare("UPDATE tournois4 SET vainqueur1 = :nouveau");
    $vainqueur1->execute(array('nouveau' => $recupTournoisFetch['equipe2']));
    header('location: oneTournois.php?id=' . $_GET['id'] . "'");
}

if(isset($_POST['3'])) {
    $vainqueur1 = $bdd->prepare("UPDATE tournois4 SET vainqueur2 = :nouveau");
    $vainqueur1->execute(array('nouveau' => $recupTournoisFetch['equipe3']));
    header('location: oneTournois.php?id=' . $_GET['id'] . "'");
}

if(isset($_POST['4'])) {
    $vainqueur1 = $bdd->prepare("UPDATE tournois4 SET vainqueur2 = :nouveau");
    $vainqueur1->execute(array('nouveau' => $recupTournoisFetch['equipe4']));
    header('location: oneTournois.php?id=' . $_GET['id'] . "'");
}

if(isset($_POST['5'])) {
    $vainqueur1 = $bdd->prepare("UPDATE tournois4 SET vainqueur3 = :nouveau");
    $vainqueur1->execute(array('nouveau' => $recupTournoisFetch['vainqueur1']));
    header('location: oneTournois.php?id=' . $_GET['id'] . "'");
}

if(isset($_POST['6'])) {
    $vainqueur1 = $bdd->prepare("UPDATE tournois4 SET vainqueur3 = :nouveau");
    $vainqueur1->execute(array('nouveau' => $recupTournoisFetch['vainqueur2']));
    header('location: oneTournois.php?id=' . $_GET['id'] . "'");
}

$monTournoi = false;
if($_SESSION['pseudo'] == $recupTournoisFetch['createur']) {
    $monTournoi = true;
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
    <main id="mainArbre">
        <section id="info">
            <h2><?= $recupTournoisFetch['titre'] ?></h2>
            <p><?= $recupTournoisFetch['descr']?></p>
            <p>1er prix : <?= $recupTournoisFetch['1prix']?></p>
            <p>2eme prix : <?= $recupTournoisFetch['2prix']?></p>
            <p>3eme prix : <?= $recupTournoisFetch['3prix']?></p>
            <section id="lien">
                <p>Copier le lien et envoyez le à vos amis ! :</p>
                <input type="text" value="futur lien + oneTournois.php?id=<?=$_GET['id']?>">
            </section>
        </section>
        <section class="Row_style" id="arbrorito">
            <div class="Column">
                <div class="equipe"><?= $recupTournoisFetch['equipe1'] ?><form action="#arbrorito" method="post"><?php if($monTournoi == true){?><input type="submit" value="🏆" name="1"><?php } ?></form></div>
                <div class="equipe"><?= $recupTournoisFetch['equipe2'] ?><form action="#arbrorito" method="post"><?php if($monTournoi == true){?><input type="submit" value="🏆" name="2"><?php } ?></form></div>
                <br>
                <div class="equipe"><?= $recupTournoisFetch['equipe3'] ?><form action="#arbrorito" method="post"><?php if($monTournoi == true){?><input type="submit" value="🏆" name="3"><?php } ?></form></div>
                <div class="equipe"><?= $recupTournoisFetch['equipe4'] ?><form action="#arbrorito" method="post"><?php if($monTournoi == true){?><input type="submit" value="🏆" name="4"><?php } ?></form></div>
            </div>
            <div class="Column">
                <div class="equipe"><?= $recupTournoisFetch['vainqueur1'] ?><form action="#arbrorito" method="post"><?php if($monTournoi == true){?><input type="submit" value="🏆" name="5"><?php } ?></form></div>
                <div class="equipe"><?= $recupTournoisFetch['vainqueur2'] ?><form action="#arbrorito" method="post"><?php if($monTournoi == true){?><input type="submit" value="🏆" name="6"><?php } ?></form></div>
            </div>
            <div class="Column">
                <div class="equipe"><?= $recupTournoisFetch['vainqueur3'] ?></div>
            </div>
        </section>
        
    </main>


    <?php
    Site::footerSite();
    Site::scripts();
    ?>

    <script>

    </script>
</body>
<style>

#formCrea {
  display: flex;
  flex-direction: column;
  width: 40%;
}

#arbre {
  border: solid black 1px;
  display: flex;
  align-items: center;
  width: 50%;
  margin: 0 auto;
}

.arbre2 {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.equipe {
  border: solid black 1px;
  width: 40%;
  display: flex;
  justify-content: space-between;
}

#info h2 {
    text-align: center;
    font-size: 40px;
}

#lien {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

#lien input {
    text-align: center;
}

</style>


</html>
