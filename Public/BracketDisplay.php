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
        <section class="Row_style">
            <div class="Column">
               <div>
                    <p>Equipe 1</p>
               </div> 
               <div>
                    <p>Equipe 2</p>
               </div>
               <div>
                    <p>Equipe 3</p>
               </div> 
               <div>
                    <p>Equipe 4</p>
               </div> 
               <div>
                    <p>Equipe 5 </p>
               </div> 
               <div>
                    <p>Equipe 6</p>
               </div>
               <div>
                    <p>Equipe 7</p>
               </div> 
               <div>
                    <p>Equipe 8</p>
               </div> 
            </div>
            <div class="Column">
                <div>
                    <p>Equipe 1</p>
               </div> 
               <div>
                    <p>Equipe 4</p>
               </div>
               <div>
                    <p>Equipe 5 </p>
               </div> 
               <div>
                    <p>Equipe 8</p>
               </div> 
                
            </div>
            <div class="Column">
                <div>
                    <p>Equipe 1</p>
               </div> 
               <div>
                    <p>Equipe 5</p>
               </div> 
            </div>      
            <div class="Column">
                <div>
                    <p>Equipe 5</p>
               </div> 
            </div>
        </section>


    <?php
    Site::footerSite();
    Site::scripts()
    ?>
</body>


</html>