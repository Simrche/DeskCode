<?php 

session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);

$ajoutTournois = $bdd->prepare("INSERT INTO tournois4(titre, jeu, equipe1, equipe2, equipe3, equipe4, createur, seed, jour, 1prix, 2prix, 3prix, descr) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
if(isset($_POST['envoyer'])){
    $ajoutTournois->execute(array($_POST['titre'], $_POST['jeu'], $_POST['equipe1'], $_POST['equipe2'], $_POST['equipe3'], $_POST['equipe4'], $_SESSION['pseudo'], "lalala", $_POST['date'], $_POST['1prix'], $_POST['2prix'], $_POST['3prix'], $_POST['desc']));
}

header("location:ListTournois.php");