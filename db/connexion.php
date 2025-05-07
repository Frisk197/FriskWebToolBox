<?php

namespace FriskWebToolBox\db;

use PDO;

class Databases{
    public static function getOCI($dbName="", $login="", $password="", $withTime=true){

        try{
            $bdd = new PDO("oci:dbname=" . $dbName, $login, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            if($withTime){
            $reqAlterDate = $bdd->prepare("ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'");
            } else {
            $reqAlterDate = $bdd->prepare("ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD'");
            }
            $reqAlterDate->execute();
            return $bdd;
        } catch(Exception $e) {
            die('erreur : ' . $e->getMessage());
        }
    }

    public static function getMysql($dbHost="", $dbName="", $login="", $password=""){

        try{
            $bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $login, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return $bdd;
        } catch(Exception $e) {
            die('erreur : ' . $e->getMessage());
        }
    }
}

