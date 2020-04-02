<?php

class frontpageController extends frontpageModel{

    public function __construct($f3) {
        $f3->set('headers', 'headers/default.html');
        $f3->set('view', 'frontpage/frontpage.html');
    }

    public function site() {
        echo \Template::instance()->render('views.html');
    }

}
