<?php
session_start();
include "../codes.php";
$bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", $indivRoots, $indivMdp);

$ajoutUsers = $bdd->prepare("INSERT INTO users(users_pseudo, users_mdp, users_email) VALUES(?, ?, ?);");
$connexion =  $bdd->prepare('SELECT users_mdp FROM users WHERE users_pseudo=:pseudo');

if (isset($_POST['envoyer'])) {
    if ($_POST['mdp'] === $_POST['mdpVerif']) {
        $ajoutUsers->execute(array($_POST['username'], password_hash($_POST['mdp'], PASSWORD_DEFAULT), $_POST['email']));
    }
}

if (isset($_POST['envoyerLog'])) {
    $connexion->execute(array('pseudo' => $_POST['usernameLog']));
    $donnees = $connexion->fetch();
    if (password_verify($_POST['mdpLog'], $donnees['users_mdp'])) {
        $_SESSION['pseudo'] = $_POST['usernameLog'];
        header('Location: index.php');
    }
}

if (isset($_POST['deco'])) {
    session_destroy();
    header('location:index.php');
}

if (isset($_SESSION['pseudo'])) {
    echo "connecté sous le compte de " . $_SESSION['pseudo'];
}

use App\Site;

require "../Autoloader.php";
Autoloader::register();


?>

<!DOCTYPE html>
<html lang="fr">
<?php Site::headSite(); ?>
<!-- <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/df1182159f.js" crossorigin="anonymous"></script>
        <title>Accueil</title>
    </head> -->

<body>
    <?php include "../signUp.php" ?>
    <?php
    Site::headerSite();
    ?>

    <section id="info">
        <h1>LDV Esport</h1>
        <p>LDV ESPORT est donc une association orientée vers les jeux vidéos compétitifs et dont le but est de rayonner grâce aux performances de ses joueurs. Au travers de compétitions en lignes ou en LAN, les joueurs portent les couleurs E-sport en affrontant des équipes aussi bien amateurs que professionnelles.</p>

        <p>Pour l’année 2018-2019, LDV ESPORT devient officiellement une association. Elle sera donc composée en plus des joueurs, d’étudiants voulant mettre un pied dans ce domaine afin d’apporter leur pierre à l’édifice. De nombreux événements étudiants seront mis en place tels que des compétitions et une journée à thème jeux vidéo. <br> <br> <br>

            Et ce n’est qu’un début… Venez agrandir les rangs de l’association si vous vous sentez l’âme d’un passionné.</p>
    </section>

    <section id="allGame">
        <h2>Les jeux</h2>
        <article class="optionsBra">
            <section><a href="#">Création de Bracket</a></section>
            <section><a href="#">Rejoindre un bracket déjà existant</a></section>
            <section><a href="#">Regarder les anciens matchs</a></section>
        </article>

    </section>

    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>