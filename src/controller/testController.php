<?php


    /**
     * Cette fonction se charge de retourner la réponse représentant la page d'accueil.
     *
     * @return string
     */
    function index() : string
    {
        return render("test.html.php");
    }


    function toGreat() : string
    {
        return render("great.html.php");
    }


    /**
     * Cette fonction se charge de retourner le contenu de la vue générée.
     *
     * @param string $view_path
     * @return string
     */
    function render(string $view_path) : string
    {
        ob_start();
        require TEMPLATES . "/$view_path";
        return ob_get_clean();
    }