<?php

    /**
     * -----------------------------------------------------------------------------------------
     *                              Amorceur de l'application
     * 
     * L'amorçage fait référence au processus de préparation de l'environnement avant 
     * qu'une application ne démarre, pour résoudre et traiter une requête d'entrée. 
     * L'amorçage se fait en deux endroits : le script d'entrée et l'application.
     * 
     * Ses rôles : 
     *  - Charger les (raccourcis) constantes
     *  - Charger les variables d'environnement
     *  - Charger la configuration système
     *  - Charger la congiguration session
     *  - Charger le monolog
     * ------------------------------------------------------------------------------------------
    */


    // Chargement des constantes
    require __DIR__ . "/constants.php";


    // Chargement et traitement des variables d'environnement
    require CONFIG . "/environment.php";


    // Chargement de la configuration système
    require CONFIG . "/system.php";


    // Chargement de la configuration session
    require CONFIG . "/session.php";


    // Chargement du monolog
    // require CONFIG . "/monolog.php";


    