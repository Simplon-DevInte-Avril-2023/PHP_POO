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
    function getId(){
        return $this->id;
    }
    function getDepartment(){
        return $this->department;
    }
    function setDepartment($department){
        $this->department = $department;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getNom(){
        return $this->name;
    }
    function setNom($nom){
        $this->name = $nom;
    }
}

?>