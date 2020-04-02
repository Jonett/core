<?php

class database {
    //quick solution
    public function __construct($f3) {
        $init_ = array(\PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES LATIN1;');
        $f3->set('DB', new \DB\SQL('mysql:host='.$f3->DB_HOST.';port='.$f3->DB_PORT.';dbname='.$f3->DB_NAME,$f3->DB_USER,$f3->DB_PWD,$init_));
        
    }
}