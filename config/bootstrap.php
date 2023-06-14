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



    // Chargement et traitement des variables d'environnement
    require __DIR__ . "/environment.php";
    

    //chargement et traitement des variables d'environnement

    require CONFIG . "/environment.php";

    // Charger la configuration système
    require CONFIG . "/system.php";

    // Chargement de la configuration session
    require CONFIG . "/session.php";

    


    