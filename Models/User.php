<?php

require_once('Model.php');

class User extends Model {
    private $id;
    private $firstname;
    private $lastname;
    private $birthday;
    private $email;

    public function __construct($firstname = '', $lastname = '', $birthday = '', $email = '') {
        $this->set_firstname($firstname);
        $this->set_lastname($lastname);
        $this->set_birthday($birthday);
        $this->set_email($email);
    }
    
    public function get_id() : int {
        return $this->id;
    }
    
    public function get_firstname() : string {
        return $this->firstname;
    }
    
    private function set_firstname(string $firstname) : void{
        $this->firstname = $firstname;
        return;
    }
    
    public function get_lastname() : string {
        return $this->lastname;
    }
    
    public function set_lastname(string $lastname) {
        $this->lastname = $lastname;
        return;
    }
    
    public function get_birthday() : string {
        return $this->birthday;
    }
    
    public function set_birthday(string $birthday) : void {
        $this->birthday = $birthday;
        return;
    }
    
    public function get_email() : string {
        return $this->email;
    }
    
    public function set_email(string $email) : void {
        $this->email = $email;
        return;
    }

    public function get_all_users() : array {
        $all_users = [];
        foreach($this->query('SELECT * FROM Users') as $user) {
            array_push(
                $all_users, 
                new self($user['firstname'], $user['lastname'], $user['birthday'], $user['email'])
            );
        }
        return $all_users;
    }

    public function create_user(User $user) {

    }
}