<?php

require_once('DatabaseConnect.php');

class Model {
    public function query($sql) : array {
        $dbConnection = new DatabaseConnect();
        $db = $dbConnection->db_connect();
        $command = $db->prepare($sql);
        $command->execute();
        return $command->fetchAll();
    }
}
