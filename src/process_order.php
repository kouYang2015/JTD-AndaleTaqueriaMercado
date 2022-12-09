<!DOCTYPE html>
<html>

<head>
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="./css/theme.css" />
    <link rel="stylesheet" href="./css/process_order.css" />
</head>

<body>
    <?php include 'header.html'; ?>
    <h1 class="title-fonts" style="text-align: center;margin-top:50px;"> Order Confirmation</h1>
    <div class="order-review-container">
        <p>Your Order:</p>
        <?php
        $order_date = $_POST['order_date'];
        $order_time = $_POST['order_time'];
        $format_time = date_create($order_time);
        $format_date = date_create($order_date);
        echo '<p>Order Pickup Date: ' . date_format($format_date, "D M d") . ' at ' . date_format($format_time, "h:i A") . '</p>';
        $alambres = $_POST['alambres'];
        $alambres = preg_replace("#[^0-9\.,]#", '', $alambres); // Formats post output to just the numbers and decimal
        $alambres_quantity = $_POST['alambres-quantity'];

        $burritos = $_POST['burritos'];
        $burritos = preg_replace("#[^0-9\.,]#", '', $burritos); // Formats post output to just the numbers and decimal
        $burritos = (float) $burritos;
        $burritos_quantity = $_POST['burritos-quantity'];

        $tacos = $_POST['tacos'];
        $tacos = preg_replace("#[^0-9\.,]#", '', $tacos); // Formats post output to just the numbers and decimal
        $tacos = (float) $tacos;
        $tacos_quantity = $_POST['tacos-quantity'];

        $quesadillas = $_POST['quesadillas'];
        $quesadillas = preg_replace("#[^0-9\.,]#", '', $quesadillas); // Formats post output to just the numbers and decimal
        $quesadillas = (float) $quesadillas;
        $quesadillas_quantity = $_POST['quesadillas-quantity'];

        $platillos = $_POST['platillos'];
        $platillos = preg_replace("#[^0-9\.,]#", '', $platillos); // Formats post output to just the numbers and decimal
        $platillos = (float) $platillos;
        $platillos_quantity = $_POST['platillos-quantity'];

        $breakfast = $_POST['breakfast'];
        $breakfast = preg_replace("#[^0-9\.,]#", '', $breakfast); // Formats post output to just the numbers and decimal
        $breakfast = (float) $breakfast;
        $breakfast_quantity = $_POST['breakfast-quantity'];

        $kids = $_POST['kids'];
        $kids = preg_replace("#[^0-9\.,]#", '', $kids); // Formats post output to just the numbers and decimal
        $kids = (float) $kids;
        $kids_quantity = $_POST['kids-quantity'];

        $sides = $_POST['sides'];
        $sides = preg_replace("#[^0-9\.,]#", '', $sides); // Formats post output to just the numbers and decimal
        $sides = (float) $sides;
        $sides_quantity = $_POST['sides-quantity'];


        $alambres = floatval($alambres) * floatval($alambres_quantity);
        $burritos = floatval($burritos) * floatval($burritos_quantity);
        $tacos = floatval($tacos) * floatval($tacos_quantity);
        $quesadillas = floatval($quesadillas) * floatval($quesadillas_quantity);
        $platillos = floatval($platillos) * floatval($platillos_quantity);
        $breakfast = floatval($breakfast) * floatval($breakfast_quantity);
        $kids = floatval($kids) * floatval($kids_quantity);
        $sides = floatval($sides) * floatval($sides_quantity);

        $total = $alambres + $burritos + $tacos + $quesadillas + $platillos + $breakfast + $kids + $sides;
        if ($alambres > 0) {
            echo '<p>Alambres: $' . $alambres . '</p>';
        }
        if ($burritos > 0) {
            echo '<p>Burritos: $' . $burritos . '</p>';
        }
        if ($tacos > 0) {
            echo '<p>Tacos: $' . $tacos . '</p>';
        }
        if ($quesadillas > 0) {
            echo '<p>Quesadillas: $' . $quesadillas . '</p>';
        }
        if ($platillos > 0) {
            echo '<p>Platillos: $' . $platillos . '</p>';
        }
        if ($breakfast > 0) {
            echo '<p>Breakfast: $' . $breakfast . '</p>';
        }
        if ($kids > 0) {
            echo '<p>Kids: $' . $kids . '</p>';
        }
        if ($sides > 0) {
            echo '<p>Sides: $' . $sides . '</p>';
        }
        if ($total > 0) {
            echo '<p>Total: $' . $total . '</p>';
        }
        ?>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>