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
    <form action="save.php" method="post">
        <input type="hidden" value="1" name="ID_Connect" id="ID_Connect">

        <div class="form-group">
            <label for="sel1">Contacts:</label>
            <select class="form-control" id="sel1">
                <?php foreach($contacts as $positionContact => $contact): ?>
                    <a class="dropdown-item" href="#" name="Contact" id="<?= $contact['id']?>"><?= $contact['nom'].' '. $contact['prenom']  ?></a>
                    <option name="Contact" id="<?= $contact['id']?>" value="<?= $contact['id']?>"><?= $contact['nom'].' '. $contact['prenom']  ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="Montant">Montant</label>
            <input class="form-control" type="number" min="0" value="0" step=".01" id="Montant" name="Montant">
        </div>
        <div class="form-group">
            <label for="Date">Date</label>
            <input class="form-control" type="date" id="myDate" id="Date" name="Date">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <?php //echo date("Y-m-d"); ?>
</div>



</body>
</html>
