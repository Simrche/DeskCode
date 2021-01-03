<?php

namespace App;

use App\Site;

class SignInC extends Site
{
    public function __construct()
    {
    }

    public static function signUp()
    { ?>
        <article class="signUpBg">

            <section class="signUp">
                <button class="closeBut"><i class="fas fa-times fa-2x"></i></button>
                <h2>S'inscrire :</h2>
                <form action="#" class="signForm" method='post'>
                    <input type="text" name="username" class="pseudo" placeholder="Pseudo" required>
                    <input type="email" name="email" class="email" placeholder="Email" required>
                    <input type="password" name='mdp' class="mdp" placeholder="Mot de passe" required>
                    <input type="password" name='mdpVerif' class="mdpVerif" placeholder="Vérification mot de passe" required>
                    <input type="submit" name='envoyer' class="subBut" value="M'inscrire !">
                </form>
            </section>
        </article>


    <?php }

    public static function logIn()
    { ?>
        <article class="logInBg">

            <section class="logIn">
                <button class="closeBut"><i class="fas fa-times fa-2x"></i></button>
                <h2>Se connecter :</h2>
                <form action="#" class="logForm" method='post'>
                    <input type="text" name="usernameLog" placeholder="Pseudo" required>
                    <input type="password" name='mdpLog' placeholder="Mot de passe" required>
                    <input type="submit" name='envoyerLog' class="subBut" value="Me connecter !">
                </form>
            </section>
        </article>
<?php }

    public static function addUser($addU)
    {
        if (isset($_POST['envoyer'])) {
            if ($_POST['mdp'] === $_POST['mdpVerif']) {
                $addU->execute(array($_POST['username'], password_hash($_POST['mdp'], PASSWORD_DEFAULT), $_POST['email']));
            }
        }
    }

    public static function connexion($co)
    {
        if (isset($_POST['envoyerLog'])) {
            $co->execute(array('pseudo' => $_POST['usernameLog']));
            $donnees = $co->fetch();
            if (password_verify($_POST['mdpLog'], $donnees['users_mdp'])) {
                $_SESSION['pseudo'] = $_POST['usernameLog'];
                header('Location: index.php');
            }
        }
    }

    public static function deconnexionU()
    {
        if (isset($_POST['deco'])) {
            session_destroy();
            header('location:index.php');
            Site::headerSite();
        }
    }
}
?>