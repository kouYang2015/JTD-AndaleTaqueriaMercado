<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="./css/theme.css" />
    <link rel="stylesheet" href="./css/process_contact.css" />
</head>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<body>
    <?php include 'header.html'; ?>
    <h2 style="text-align: center; margin:100px 0px 50px 0px;">Your inquiry has been received, you will receive a response in 1-3 business days.</h2>
    <div class="container">
        <div class="inner-container">
            <h3>Name -<br />
                <?php echo $name; ?>
            </h3>
            <h3>Email -<br />
                <?php echo $email; ?>
            </h3>
            <h3>Message -<br />
                <?php echo $message; ?>
            </h3>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>