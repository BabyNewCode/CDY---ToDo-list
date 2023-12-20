<?php

class Bdd
{
    public static function connexion()
    {
        try {
            return new PDO("mysql:host=51.158.59.186;port=14301;dbname=SA", "phppex", "Supermotdepasse!42");
        } catch (Exception $e) {
            return $e->getMessage();

        }
    }
}

$bdd = Bdd::connexion();