<?php

namespace app\controllers;

class AboutCtrl {

    public function action_about() {
        $this->generateView();
    }

    public function generateView() {
        
        getSmarty()->assign('page_title', 'O projekcie');
        getSmarty()->assign('page_header', 'O projekcie');
        getSmarty()->display('about.tpl');
        
    }
}