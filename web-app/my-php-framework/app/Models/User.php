<?php

class User {
    public $id;
    public $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getUserData() {
        // Logic to retrieve user data from the database
    }

    public function save() {
        // Logic to save user data to the database
    }

    public function delete() {
        // Logic to delete user data from the database
    }
}