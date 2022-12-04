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


$alambres = floatval($alambres) * floatval($alambres_quantity); // Alambres total
$burritos = floatval($burritos) * floatval($burritos_quantity); // Burritos totals
$tacos = floatval($tacos) * floatval($tacos_quantity); // Tacos total


$total = $alambres + $burritos + $tacos;
?>

<body>
    <?php include 'header.html'; ?>
    <div>
        <?php if ($alambres > 0) {
            echo "Alambres: " . "$" . $alambres;
        }
        ?>
        <br />
        <?php if ($burritos > 0) {
            echo "Burritos: " . "$" . $burritos;
        }
        ?>
        <br />
        <?php if ($tacos > 0) {
            echo "Tacos: " . "$" . $tacos;
        }
        ?>
        <br />
        <?php if ($total > 0) {
            echo "Total: " . "$" . $total;
        }
        ?>
        <br />
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>