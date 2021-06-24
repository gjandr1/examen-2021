<?php require_once('liste_transactions.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>Formulaire transactions</title>
</head>
<body>
<h1>Formulaire transactions</h1>
<div class="container">
    <form action="">
        <input type="hidden" value="1" name="ID_Connect" id="ID_Connect">
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Contacts
            </button>
            <div class="dropdown-menu">
                <?php foreach($contacts as $positionContact => $contact): ?>
                    <a class="dropdown-item" href="#"><?= $contact['nom'].' '. $contact['prenom']  ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="Montant">Montant</label>
            <input class="form-control" type="number" min="0" value="0" step=".01" id="Montant">
        </div>
        <div class="form-group">
            <label for="Date">Date</label>
            <input class="form-control" type="date" id="myDate" id="Date">
        </div>
    </form>



    <?php //echo date("Y-m-d"); ?>
</div>



</body>
</html>
