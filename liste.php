<?php require_once('liste_transactions.php');

$DateBegin = date('Y-m-d', strtotime("2021-06-01"));
$DateEnd = date('Y-m-d', strtotime("2021-06-30"));
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
    <title>Liste des transactions</title>
</head>
<body>
<h1>Liste des transactions</h1>

<table style="width:100%" class="table table-hover">
    <thead>
        <tr>
            <th>Date</th>
            <th>Nom-prenom</th>
            <th>Num compte</th>
            <th>Montant</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($transactions as $positionTransaction => $transaction): ?>
                <tr>
                    <td><?= $transaction['date'];?></td>
                    <?php foreach($contacts as $positionContact => $contact): ?>
                        <?php if ($transaction['montant']>0 ? $transaction['emetteur']===$contact['id'] : $transaction['destinataire']===$contact['id'] ):  ?>
                            <td><?= $transaction['montant']>0 ? strtoupper($contact['nom'].' '. $contact['prenom']) : strtolower($contact['nom'].' '. $contact['prenom'])   ?></td>
                            <td><?= substr_replace($contact['compte'],' XXXX XXXX ',4,8)  ?> </td>
                        <?php endif;?>
                    <?php endforeach; ?>
                    <td class=" <?= $transaction['montant']>0 ? 'textGreen"' : ''  ?>"><?= $transaction['montant'];?></td>
                </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="formulaire.php" class="btn btn-primary">Formulaire</a>

</body>
</html>