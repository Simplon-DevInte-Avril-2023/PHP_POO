<?php
    include('employe.php');
    if(isset($_GET['id'])){
        $employeId = $_GET['id'];
        $employe = Employe::getEmployeById($employeId);
        var_dump($employe);

        if($employe){
            //Vérifie que le formulare a été soumis
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $newDepartment = $_POST['department'];
                $newEmail = $_POST['email'];
                $newName = $_POST['name'];

                Employe::updateEmploye(new Employe($employeId, $newDepartment, $newEmail, $newName));
                header('Location: index.php');
                exit;
            } 
        }
            else {
                // L'employé n'existe pas, vous pouvez afficher un message d'erreur ou rediriger vers une autre page
                echo 'L\'employé spécifié n\'existe pas.';
                exit;
            }
        } else {
            // L'identifiant de l'employé n'est pas spécifié dans l'URL, vous pouvez afficher un message d'erreur ou rediriger vers une autre page
            echo 'Identifiant de l\'employé non spécifié.';
            exit;
    }
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
    <h1> Modification de <?php echo $employe->getNom(); ?> </h1>
    <form method="POST">
        <label for="department">Département :</label>
        <input type="text" id="department" name="department" value="<?php echo $employe->getDepartment(); ?>" required>
        <br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $employe->getEmail(); ?>" required>
        <br>

        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="<?php echo $employe->getNom(); ?>" required>
        <br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>