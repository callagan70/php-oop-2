<?php 

require __DIR__ . '/data/animal.php';


$monge = new productName ("Monge", "Pappa cani", 58);
$purina = new productName ("Purina", "Pappa gatti", 68);

$palla = new Toys ("Palla", "Pallina", 58);
$corda = new Toys ("Corda", "Tessuto", 68);

$crocchette = new Food ("Crocchette", "Molto buone", 58);
$umido = new Food ("Umido", "Scatolette", 68);

var_dump($monge);
var_dump($purina);
var_dump($palla);
var_dump($corda);
var_dump($crocchette);
var_dump($umido);

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

<br>
    <span>Nome: <?= $monge -> name?></span> <br>
    <span> Stelle: <?php echo $monge -> star ?> </span> <br>
    <span> Valutazione: <?php echo $monge -> getValutazione() ?> </span>
    
</body>
</html>