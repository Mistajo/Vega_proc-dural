<?php 

$sessionLifeTime = $_ENV["SESSION_LIFE_TIME"] *60;

ini_set("session.gc_maxlifetime", $sessionLifeTime);

    // echo ini_get("session.gc_maxlifetime") / 60;

    session_start();