<?php

namespace App;

use App\Site;

class BracketForm extends Site
{
    public function __construct()
    {
    }

    public static function form()
    { ?>
        <form action="redirection.php" method="post">
                <div>
                    <label for="">Titre : </label><input type="text" name="titre">

                    <label for="">Date: </label><input type="date" name="date">

                    <label for="">Jeu :</label>
                    <select name="jeu" id="jeu">
                        <option value="">Jeu</option>
                        <option value="league of legends">League of legends</option>
                        <option value="rocket league">Rocket league</option>
                    </select>

                    <label for="">Nombre d'équipes: </label>
                    <select name="nombreEquipe" id="equipe">
                        <option value="">Nombre équipe</option>
                        <option value="4">4</option>
                    </select>

                    <label for="">Equipe 1</label><input type="text" name="equipe1">

                    <label for="">Equipe 2</label><input type="text" name="equipe2">

                    <label for="">Equipe 3</label><input type="text" name="equipe3">

                    <label for="">Equipe 4</label><input type="text" name="equipe4">

                    <label for="">1er prix: </label><input type="text" name="1prix">

                    <label for="">Second Prix: </label><input type="text" name="2prix">

                    <label for="">Troisième prix: </label><input type="text" name="3prix">

                    <label for="">Description: </label><textarea name="desc"></textarea>

                    <input type="submit" value="Créer" name="envoyer">
<?php
    }
}
