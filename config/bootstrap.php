<?php

/**
 * --------------------------------------------------------
 *                        L'amorceur de l'application
 * 
 * Ses roles:
 * -Charger les raccourcis (constantes)
 * -Charger les variables d'environnement
 * -Charger la configuration systeme
 * -Charger la configuration de la session
 * ----------------------------------------------------------------
  
 */

 //Chargement des constantes
 require__DIR__ ."/constants.php;

 // Chargement des variables d'environnement
 $envFile =parse_ini_file(ROOT . "/../env.conf");

 var_dump($envFile);