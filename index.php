<?php 

require __DIR__ . '/data/animal.php';




$monge = new product ("Monge", "Pappa cani", "58");
$purina = new product ("Purina", "Pappa gatti", "68");

$monge -> setStar();
// $monge -> setValutazione($monge -> $star);

var_dump($monge);
var_dump($purina);

?>

<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p> Stelle: <?php echo $monge -> getStar() ?> </p>
    <p>Nome: <?= $monge -> name?></p>
    <!-- <p> Valutazione: <?php echo $monge -> getValutazione() ?> </p> -->
    
</body>
</html>