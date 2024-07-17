<?php

namespace Rodrigotutz\Controllers;
use League\Plates\Engine;

abstract class Controller {
    protected $router;
    protected $view;
    protected $error;
    protected $message = null;
    protected $class = null;

    public function __construct($router){
        $this->router = $router;
        $this->view =  new Engine(dirname(__DIR__, 1)."\Views", "php");
        $this->error();
        $this->view->addData([
            "router" => $router,
            'message' => $this->message,
            'class' => $this->class
        ]);
    }

    private function error() {
        if(isset($_GET['error'])) {
            if($_GET['error'] === 'url-not-found') {
                $this->message = "Você deve informar uma url válida";
            }

            $this->class = 'danger';
        }
    }
}