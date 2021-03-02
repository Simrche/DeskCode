<?php

namespace App;

use App\Site;

class TeamForm extends Site
{
    public function __construct()
    {
    }

    public static function theName()
    { ?>
        <label for="">Nom : </label><input type="text">
    <?php
    }

    public static function members($nb)
    { ?>


        <label for="">Chef d'équipe: </label><input type="text">
        <?php
        for ($i=1; $i <= $nb; $i++) { 

            ?>
            <label for="">Joueur <?php echo $i ?> : </label><span><input type="text">&nbsp;&nbsp;<input type="text"></span>

        <?php } ?>

        <label for="">Email: </label><input type="text">

        <label for="">Discord: </label><input type="text">

<?php }
}
