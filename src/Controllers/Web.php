<?php

namespace Rodrigotutz\Controllers;
use Rodrigotutz\Ulvis\UrlShortner;

class Web extends Controller {

    public function __construct($router) {
        parent::__construct($router);
    }

    public function index($data) {

        $short = null;

        if(isset($data['url'])) {
            $url = filter_var($data['url'], FILTER_VALIDATE_URL);

            if(!$url) {
                $this->router->redirect("web.index",[
                    'error' => 'url-not-found'
                ]);
            }            
            $short = UrlShortner::short($url);
            
            $this->router->redirect("web.index", [
                'short' => $short
            ]);
        }

        $short = $_GET['short'] ?? '';

        $this->view->addData([
            "title" => getenv("APP_NAME"),
            'short' => $short
        ]);

        echo $this->view->render("index");
    }

    public function error() {
        echo $this->view->render('404');
    }

}