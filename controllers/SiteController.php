<?php

class SiteController{
    public function index(){
        include_once('views/site/index.php');
    }

    public function error(){
        include_once('views/site/error.php');
    }
}

?>