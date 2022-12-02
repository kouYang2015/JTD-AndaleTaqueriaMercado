<!DOCTYPE html>
<html>

<head>
  <title>Order Catering</title>
  <link rel="stylesheet" href="./css/theme.css" />
  <link rel="stylesheet" href="./css/catering_form.css" />
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="info-container">
    <h1 class="title-fonts">Catering</h1>
    <p>This is an inquiry only&#33;</p>
    <p>We will send you an estimate cost and time based on your request within 1&#45;3 business days.</p>
  </div>
  <div class="catering_form-container">
    <form action="process_catering.php" method="post">

      <input class="button" type=submit name="order" value="Submit" />
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>