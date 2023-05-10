<?php


use view\html\Elements;
use view\html\View;

class App
{

    private View $view;

    public function __construct()
    {
        $this->view = new View();
        $this->setupView();

    }

    public function setupView() {

        // Head der HTML-Seite
        $this->view
            ->write(Elements::DOCTYPE_HTML)
            ->begin(Elements::HTML,["lang"=> "de"])
            ->begin(Elements::HEAD)
            ->begin(Elements::META,["charset" => "UTF-8"])
            ->begin(Elements::TITLE)
            ->write("Informatikwebsite")
            ->end(Elements::TITLE)
            ->begin(Elements::META,["description" => "Dies ist eine PHP-Website"])
            ->begin(Elements::META,["author" => "Benjamin Wagner"])
            ->begin(Elements::META,["keywords" => "php,html,apache,informatics"])
            ->end(Elements::HEAD)
        ;

        // Body der HTML-Seite
        $this->view
            ->begin(Elements::BODY,["lang"=> "de"])
            ->write("Dies ist ein Text im Body!")
            ->end(Elements::BODY)
            ->end(Elements::HTML)
        ;

    }

}