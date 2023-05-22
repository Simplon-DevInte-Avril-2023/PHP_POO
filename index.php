<?php 
    include('Personne.php');
    include('article.php');
    include('employe.php');

    


    //Création d'une instance de classe avec le mot clé 'new'
    $unePersonne = new Personne("Mathis", "20", "Homme", "Marron");
    //Affiche le détail de l'objet Personne
    var_dump($unePersonne);
    //Appelle le setter (mutateur)
    $unePersonne->setNom("Alexandre");
    var_dump($unePersonne);

    $uneAutrePersonne = new Personne("Alexandre", "22", "Homme", "Marron");
    var_dump($uneAutrePersonne);

    $article1 = new Article('café', 4.5);
    $article2 = new Article('thé', 2.5);
    $article3 = new Article('pastèque', 3);

    $panier = array($article1, $article2, $article3);
    $totalPrice = 0;
    foreach ($panier as $element){
        $totalPrice += $element->getPrix();  
    }
    var_dump($totalPrice);

    $bdd = new PDO('mysql:dbname=demotl;host=127.0.0.1','root', '');
    $queryExec = $bdd->query("SELECT * FROM employe");
    $lesEmployes = $queryExec->fetchAll();
    foreach($lesEmployes as $unEmploye){
        var_dump($unEmploye);
        $empl = new Employe($unEmploye['id'], $unEmploye['department'], $unEmploye['email'], $unEmploye['name']);
        var_dump($empl);
    }


?>