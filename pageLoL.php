<?php 

    $bdd = new PDO("mysql:host=localhost;dbname=deskcode;charset=utf8", "root", "");

    $bdd->query("CREATE TABLE tournois(
        tourn_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
        tourn_titre VARCHAR(255),
        tourn_jeu VARCHAR(255)
        );");

    $tournoiLol = $bdd->query("SELECT tourn_titre as titre FROM tournois WHERE tourn_jeu = 'League of legends';");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>LDV E-sport</title>
</head>
<body>
    <header>
            <div id="headerPartie1">
                <a href="index.php"><img src="img/logoLdvEsport.png" alt="Logo ldv"></a>
                <input list="jeu" type="text" id="choix_jeu" placeholder="Choisir un jeu">
                <datalist id="jeu">
                    <option value="League of Legends">
                    <option value="Rocket League">
                    <option value="CS:GO">
                    <option value="FIFA 21">
                </datalist>
            </div>
            <input type="search" id="search_bar" placeholder="Rechercher un tournoi">
            <div id="log">
                <a href="#">Se connecter</a>
                <a href="#">S'inscrire</a>
            </div>
        </header>
    <main>
        <div class="records">
            <p>Suivez en direct sur Twitch</p>
            <div class="lastest">
                <div class="last">
                    <img src="img/records.jpg" alt=""><p>Match 1</p>
                </div>
                
                <div class="last">
                    <img src="img/records.jpg" alt=""> <p>Match 2</p>
                </div>
               
                <div class="last">
                    <img src="img/records.jpg" alt=""><p>Match 3</p>
                </div>
                
            </div>
        </div>
        <div class="new">
            <p>Brackets personalisée</p>
            <div class="brac">
                <?php foreach($tournoiLol as $tournoisLol) :?>
                    <a href="#" class="brac1"><h2><?php echo $tournoisLol['titre'];?></h2></a>
                <?php endforeach; ?>
                <a href="#" class="brac1"><h2>Bracket 1</h2> </a>
                <a href="#" class="bracNew"><p><i class="fas fa-plus"></i></p></a>
            </div>  
        </div>
    </main>
    <footer></footer>
    <script src="https://kit.fontawesome.com/6e19d1f268.js" crossorigin="anonymous"></script>
</body>
</html>