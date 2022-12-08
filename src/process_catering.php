<!DOCTYPE html>
<html>

<head>
    <title>Catering Confirmation</title>
    <link rel="stylesheet" href="./css/theme.css" />
    <link rel="stylesheet" href="./css/process_catering.css" />
</head>

<body>
    <?php include 'header.html'; ?>
    <h1 class="title-fonts">Catering Request</h1>
    <p>Thank you for placing a catering request with us!</p>
    <p>This is an inquiry only&#33;</p>
    <p>We will send you an estimate cost and time based on your request within 1&#45;3 business days.</p>
    <div class="catering-review-container">
        <h2>Request Review</h2>
        <?php
        if (isset($_POST['submit_catering'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $party_size = $_POST['party_size'];
            $order_date = $_POST['order_date'];
            $delivery_method = $_POST['delivery_method'];

            echo
            '<p>Name: ' . $name . '</p>
            <p>Email: ' . $email . '</p>
            <p>Phone: ' . $phone . '</p>
            <p>For Party Size of: ' . $party_size . '</p>
            <p>Order Date: ' . $order_date . '</p>
            <p>Delivery Method: ' . $delivery_method . '</p>';
            if (
                isset($_POST['entree']) ||
                isset($_POST['meat']) ||
                isset($_POST['salad']) ||
                isset($_POST['beverages']) ||
                isset($_POST['dessert'])
            ) {
                if (isset($_POST['entree'])) {
                    $entreelist = $_POST['entree'];
                    echo '<h2>Entree</h2>';
                    foreach ($entreelist as $entree) {
                        echo '<p>' . $entree . '</p>';
                    }
                }
                if (isset($_POST['meat'])) {
                    $meatlist = $_POST['meat'];
                    echo '<h2>Entree Meat Selected</h2>';
                    foreach ($meatlist as $meat) {
                        echo '<p>' . $meat . '</p>';
                    }
                }
                if (isset($_POST['salad'])) {
                    $saladlist = $_POST['salad'];
                    echo '<h2>Salads</h2>';
                    foreach ($saladlist as $salad) {
                        echo '<p>' . $salad . '</p>';
                    }
                }
                if (isset($_POST['beverages'])) {
                    $beverageslist = $_POST['beverages'];
                    echo '<h2>Beverages</h2>';
                    foreach ($beverageslist as $beverages) {
                        echo '<p>' . $beverages . '</p>';
                    }
                }
                if (isset($_POST['dessert'])) {
                    $dessertlist = $_POST['dessert'];
                    echo '<h2>Desserts</h2>';
                    foreach ($dessertlist as $dessert) {
                        echo '<p>' . $dessert . '</p>';
                    }
                }
            } else {
                echo '<h2>Something went wrong. Could not get process catering request.</h2>';
            }
        }



        ?>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>