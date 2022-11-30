<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
  <link rel="stylesheet" href="./css/theme.css" />
  <link rel="stylesheet" href="./css/contact.css" />
</head>


<body>
  <?php include 'header.php'; ?>

  <body>
    <div class="container">
      <h1 style="padding:15px;"> Contact</h1>
      <div class="inner-container">
        <h1>Andale Taqueria & Mercado</h1>
        <h2>7700 Nicollet Avenue South</h2>
        <h2>Richfield, Minnesota 55423</h2>
        <div class="inner-inner-container">
          <div class="inner-container-left">
            <h1>Restaurant:</h1>
            <h3>Telephone: (612)-258-8868</h3>
            <h3>Fax: (612)-353-5067</h3>
            <br />
            <h3>Hours:</h3>
            <h3>Monday - Sunday: 7am - 10pm</h3>
          </div>
          <div class="inner-container-right">
            <h1>Market:</h1>
            <h3>Telephone: (612)-259-8929</h3>
            <h3>Fax: (612)-354-3813</h3>
            <br />
            <h3>Hours:</h3>
            <h3>Daily: 6am - 10pm</h3>
          </div>
        </div>
        <form class="form">
          <h1 style="text-align:center">Contact Us</h1>
          <label for="name"> First name:</label><br>
          <input type="text" id="name" name="name"><br>
          <label for="email"> Email:</label><br>
          <input type="text" id="email" name="email"><br>
          <label for="email"> Message:</label><br>
          <textarea rows="4" cols="50" id="message" name="message"> </textarea><br>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>

</html>