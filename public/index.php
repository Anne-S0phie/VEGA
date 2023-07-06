<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="contact.php">Contact</a>
    </nav>
    <h1>Hello World</h1>
</body>
</html>


<?php


/**
 * 
 * 
 *                        Bienvenur sur vega
 * 
 * ce fichier représente le controleur sur le frontal
 * https://en.wikipedia.org/wiki/Front_controller
 * 
 * Ses roles:
 * - recevoir la requete du client
 * - amorcer l'applicatio,
 * - charger le noyau de l'applicatio,
 * - demander au noyau de traiter la requete du client
 * - Récupérer la réponse correspondante
    - L'afficher au client
  

 */

 // Reception de la requete du client
 //Toutes les données se trouvent dans la variable superglobale $_SERVER.


 //Amorgage de l'application (Charger les fichiers de configuration).