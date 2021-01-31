<?php ?>

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