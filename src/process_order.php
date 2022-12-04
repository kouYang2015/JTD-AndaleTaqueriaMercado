<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation</title>
</head>
<?php
$alambres = $_POST['alambres'];
$alambres_quantity = $_POST['alambres-quantity'];
$burritos = $_POST['burritos'];
$burritos_quantity = $_POST['burritos-quantity'];
$tacos = $_POST['tacos'];
$tacos_quantity = $_POST['tacos-quantity'];

$alambres = filter_var($alambres, FILTER_SANITIZE_NUMBER_INT);
$alambres = $alambres * $alambres_quantity; // Alambres total

$burritos = filter_var($burritos, FILTER_SANITIZE_NUMBER_INT);
$burritos = $burritos * $burritos_quantity; // Burritos total

$tacos = filter_var($tacos, FILTER_SANITIZE_NUMBER_INT);
$tacos = $tacos * $tacos_quantity; // Tacos total

$total = $alambres + $burritos + $tacos;
?>

<body>
    <?php include 'header.html'; ?>
    <div>
        <?php echo "Alambres: " . $alambres; ?>
        <br />
        <?php echo "Burritos: " . $burritos; ?>
        <br />
        <?php echo "Tacos: " . $tacos; ?>
        <br />
        <?php echo "Total: " . $total ?>
        <br />
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>