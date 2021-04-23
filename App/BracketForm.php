<?php

namespace App;

use App\Site;

class BracketForm extends Site
{
    public function __construct()
    {
    }

    public static function labels()
    { ?>
        <label for="">Date: </label><input type="text">

        <label for="">Lieu: </label><input type="text">

        <label for="">Nombre d'équipes: </label><input type="text">

        <label for="">Loser Bracket: </label>
        <div><input type="radio" name="LoserRad">OUI<input type="radio" name="LoserRad">NON</div>

        <label for="">Match: </label>
        <select name="pets" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="bo1">BO1</option>
            <option value="bo2">BO3</option>
            <option value="bo3">BO5</option>
        </select>

        <label for="">Match finale: </label>
        <div><input type="radio" name="FinalRad">BO1<input type="radio" name="FinalRad">BO3<input type="radio" name="FinalRad">BO5</div>

        <label for="">1er prix: </label><input type="text">

        <label for="">Second Prix: </label><input type="text">

        <label for="">Troisième prix: </label><input type="text">

        <label for="">Description: </label><textarea></textarea>
<?php
    }
}
