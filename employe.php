<?php
class Employe {
    private $id;
    private $department;
    private $email;
    private $name;

    function __construct($id, $department, $email, $name){
        $this->id = $id;
        $this->department = $department;
        $this->email = $email;
        $this->name = $name;
    }
}

?>