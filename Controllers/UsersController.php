<?php

require_once('./Models/User.php');

class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    public function read() : array {
        return $this->user->get_all_users();
    }

}
