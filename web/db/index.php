<?php

Class Database{
    private $link;

    public function __construct(){
        $this->connect();
    }

    private function connect(){
        $config = require_once 'config.php';

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

        $this->link = new PDO($dsn, $config['username'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $this;
    }

    public function execute($sql){
        $sth = $this->link->prepare($sql);

        return $sth->execute();
    }

    public function query($sql){
        $sth = $this->link->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll();
        // PDO::FETCH_ASSOC
        // PDO::FETCH_COLUMN
        // if($result === false){
        //     return NULL;
        // }

        return $result;
    }
    
}

$db = new Database();

$categories = $db->query("SHOW COLUMNS FROM ratings");

//print_r($categories[0][4]);