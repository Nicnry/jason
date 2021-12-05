<?php

class DatabaseConnect {
    private $host = 'localhost';
    private $user = 'root';
    private $pw = '';
    private $database = 'jason_db';


    public function db_connect() : PDO {
        $db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database . '', $this->user, $this->pw) or die("Cannot connect to mySQL.");
        return $db;
    }

}
