<?php 
    include('Personne.php');
    include('article.php');
    include('employe.php');

    //Création d'une instance de classe avec le mot clé 'new'
    $unePersonne = new Personne("Mathis", 20 , "Homme", "Marron");
    //Affiche le détail de l'objet Personne
    var_dump($unePersonne);
    //Appelle le setter (mutateur)
    $unePersonne->setNom("Alexandre");
    var_dump($unePersonne);

    $uneAutrePersonne = new Personne("Alexandre", 22, "Homme", "Marron");
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
    function isMajor($unePersonne){
        if($unePersonne->age>=18){
            echo "il est majeur";
        }else{
            echo "il est mineur";
        }
    }
    var_dump(isMajor($unePersonne));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Département</th>
                <th scope="col">Email</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lesEmployes as $unEmploye): ?>
               <?php $empl = new Employe($unEmploye['id'], $unEmploye['department'], $unEmploye['email'], $unEmploye['name']); ?>
            <tr>
                <td scope="row"><?php echo $empl->getId(); ?></td>
                <td><?php echo $empl->getDepartment(); ?></td>
                <td><?php echo $empl->getEmail(); ?></td>
                <td><?php echo $empl->getNom(); ?></td>
                <td> 
                    <a href="modifier.php?id=<?php echo $empl->getId();?>">
                        <i class="bi bi-pencil-square"></i> Modifier 
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>