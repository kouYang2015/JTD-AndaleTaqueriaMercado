<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation</title>
</head>
<?php
$alambres = $_POST['alambres'];
$alambres = preg_replace("#[^0-9\.,]#", '', $alambres); // Formats post output to just the numbers and decimal
$alambres_quantity = $_POST['alambres-quantity'];

$burritos = $_POST['burritos'];
$burritos = preg_replace("#[^0-9\.,]#", '', $burritos); // Formats post output to just the numbers and decimal
$burritos_quantity = $_POST['burritos-quantity'];

$tacos = $_POST['tacos'];
$tacos = preg_replace("#[^0-9\.,]#", '', $tacos); // Formats post output to just the numbers and decimal
$tacos_quantity = $_POST['tacos-quantity'];

$alambres = $alambres * $alambres_quantity; // Alambres total

$burritos = $burritos * $burritos_quantity; // Burritos total

$tacos = $tacos * $tacos_quantity; // Tacos total

$total = $alambres + $burritos + $tacos;
?>

<body>
    <?php include 'header.html'; ?>
    <div>
        <?php echo "Alambres: " . "$" . $alambres ?>
        <br />
        <?php echo "Burritos: " . "$" . $burritos; ?>
        <br />
        <?php echo "Tacos: " . "$" . $tacos; ?>
        <br />
        <?php echo "Total: " . "$" . $total ?>
        <br />
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>