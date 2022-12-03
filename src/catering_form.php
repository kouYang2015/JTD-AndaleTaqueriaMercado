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
      <div>
        <label for="name">&#42;Name:</label>
        <input class="text-input" title="Enter your name" type="text" id="name" name="name" size="20" placeholder="Full Name" required="true" />
      </div>
      <div>
        <label for="email">&#42;Email:</label>
        <input class="text-input" title="Enter valid email address: email@something.com" type="text" id="email" name="email" size="20" placeholder="Email" pattern="[a-zA-Z0-9._]+@[a-z].+[a-z]" spellcheck="false" required="true" />
      </div>
      <div>
        <label for="phone">&#42;Phone:</label>
        <input class="text-input" title="Enter a valid phone number: ########## or (###)-###-####" type="tel" id="phone" name="phone" size="20" placeholder="(###)-###-####" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" required="true" />
      </div>
      <div>
        <label for="party_size">&#42;Est party size:</label>
        <input class="party-input" title="Must be greater than 0" type="number" id="party_size" name="party_size" min="1" required="true" />
      </div>
      <div>
        <label for="order_date">&#42;Order Date:</label>
        <input type="date" id="order_date" name="order_date" required="true" />
        <input type="radio" id="delivery_method1" name="delivery_method" value="pickup" />
        <label for="delivery_method1">Pickup</label>
        <input type="radio" id="delivery_method2" name="delivery_method" value="delivery" />
        <label for="delivery_method2">Deliver</label>
      </div>
      <div class="checkbox-container">
        <h2>Entree:</h2>
        <div>
          <input type="checkbox" id="entree1" name="entree[]" value="taco_bar" />
          <label for="entree1">Taco Bar</label>
          <input type="checkbox" id="entree2" name="entree[]" value="nacho_bar" />
          <label for="entree2">Nacho Bar</label>
          <input type="checkbox" id="entree3" name="entree[]" value="taquitos_flautas" />
          <label for="entree3">Taquitos Or Flautas</label>
        </div>
        <div>
          <input type="checkbox" id="entree4" name="entree[]" value="fajita_bar" />
          <label for="entree4">Fajita Bar</label>
          <input type="checkbox" id="entree5" name="entree[]" value="enchilada" />
          <label for="entree5">Enchilada</label>
          <input type="checkbox" id="entree6" name="entree[]" value="quesadillas" />
          <label for="entree6">Quesadillas</label>
        </div>
      </div>
      <div class="checkbox-container">
        <h2>Entree Meat Choice:</h2>
        <div>
          <input type="checkbox" id="meat1" name="meat[]" value="al_pastor" />
          <label for="meat1">Al Pastor</label>
          <input type="checkbox" id="meat2" name="meat[]" value="carnitas" />
          <label for="meat2">Carnitas</label>
          <input type="checkbox" id="meat3" name="meat[]" value="chorizo" />
          <label for="meat3">Chorizo</label>
        </div>
        <div>
          <input type="checkbox" id="meat4" name="meat[]" value="grilled_chicken" />
          <label for="meat4">Grilled Chicken</label>
          <input type="checkbox" id="meat5" name="meat[]" value="carne_asada" />
          <label for="meat5">Carne Asada</label>
          <input type="checkbox" id="meat6" name="meat[]" value="barbacoa" />
          <label for="meat6">Barbacoa</label>
        </div>
        <div>
          <input type="checkbox" id="meat7" name="meat[]" value="pollo_ala_mexicana" />
          <label for="meat7">Pollo a la Mexicana</label>
          <input type="checkbox" id="meat8" name="meat[]" value="pollo_ranchero" />
          <label for="meat8">Pollo Ranchero</label>
        </div>
      </div>
      <div class="checkbox-container">
        <h2>Salad:</h2>
        <div>
          <input type="checkbox" id="salad1" name="salad[]" value="cactus_leaf" />
          <label for="salad1">Cactus Leaf Salad</label>
          <input type="checkbox" id="salad2" name="salad[]" value="house_mexican" />
          <label for="salad2">House Mexican Salad</label>
        </div>
      </div>
      <div class="checkbox-container">
        <h2>Beverages:</h2>
        <div class="small-cb-container">
          <input type="checkbox" id="beverages1" name="beverages[]" value="horchata" />
          <label for="beverages1">Horchata</label>
          <input type="checkbox" id="beverages2" name="beverages[]" value="tamarind_water" />
          <label for="beverages2">Tamarind Water</label>
          <input type="checkbox" id="beverages3" name="beverages[]" value="hibiscus_water" />
          <label for="beverages3">Hibiscus Water</label>
          <input type="checkbox" id="beverages4" name="beverages[]" value="jarritos" />
          <label for="beverages4">Jarritos</label>
        </div>
      </div>
      <div class="checkbox-container">
        <h2>Dessert:</h2>
        <div class="small-cb-container">
          <input type="checkbox" id="dessert1" name="dessert[]" value="churros" />
          <label for="dessert1">Churros</label>
          <input type="checkbox" id="dessert2" name="dessert[]" value="flan" />
          <label for="dessert2">Flan</label>
          <input type="checkbox" id="dessert3" name="dessert[]" value="tres_leches" />
          <label for="dessert3">Tres Leche Cakes</label>
        </div>
      </div>
      <input class="button" type=submit name="submit_catering" value="catering_request" />
    </form>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>