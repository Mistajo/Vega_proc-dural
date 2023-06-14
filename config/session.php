<?php

    // Récupération la durée de vie de la session souhaitée en secondes
    $sessionLifeTime = $_ENV['SESSION_LIFE_TIME'] * 60;


    // Modification la valeur dans le fichier de configuration prévu par php
    ini_set("session.gc_maxlifetime", $sessionLifeTime);


    // Modification de cookie de session
    session_set_cookie_params($sessionLifeTime);

    
    // Activation de l'utilisation des sessions 
    session_start();


    // echo ini_get("session.gc_maxlifetime") / 60;