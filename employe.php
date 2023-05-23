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

    static function getEmployeById($id){
        $bdd = new PDO('mysql:dbname=demotl;host=127.0.0.1','root', '');
        $query = $bdd->query('SELECT * FROM employe WHERE id = ' . $id);
        $unEmploye = $query->fetch();
        return new Employe($unEmploye['id'], $unEmploye['department'], $unEmploye['email'], $unEmploye['name']);
    }

    static function updateEmploye($employe){
        $bdd = new PDO('mysql:dbname=demotl;host=127.0.0.1','root', '');
        $query = $bdd->prepare('UPDATE employe SET department = :dep, name = :nom, email = :email WHERE id = :id');
        $query->execute(array('dep' => $employe->getDepartment(), 'nom' => $employe->getNom(), 'email' => $employe->getEmail(), 'id' => $employe->getId()));
    }
}

?>