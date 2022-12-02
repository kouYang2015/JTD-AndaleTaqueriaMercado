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
      <table>
        <tr>
          <th> <label for="name">Name:</label></th>
          <td>
            <input class="text-input" title="Enter your name" type="text" id="name" name="name" size="20" placeholder="Full Name" required="true" />
          </td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td>
            <input class="text-input" title="Enter valid email address: email@something.com" type="text" id="email" name="email" size="20" placeholder="Email" pattern="[a-zA-Z0-9._]+@[a-z].+[a-z]" spellcheck="false" required="true" />
          </td>
        </tr>
        <tr>
          <th><label for="phone">Phone:</label></th>
          <td>
            <input class="text-input" title="Enter a valid phone number: ########## or (###)-###-####" type="tel" id="phone" name="phone" size="20" placeholder="(###)-###-####" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" required="true" />
          </td>
        </tr>
        <tr>
          <th><label for="party_size">Est party size:</label></th>
          <td class="party-input">
            <input title="Must be greater than 0" type="number" id="party_size" name="party_size" required="true" />
          </td>
        </tr>
      </table>
      <input class="button" type=submit name="order" value="Submit" />
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>