<!DOCTYPE html>
<html>

<head>
  <title>Order</title>
  <link rel="stylesheet" href="./css/theme.css" />
  <link rel="stylesheet" href="./css/order.css" />
</head>

<body>
  <?php include 'header.html'; ?>
  <div class="info-container">
    <h1 class="title-fonts">Order</h1>
    <p>We will send you an estimate cost and time based on your request within 1&#45;3 business days.</p>
  </div>
  <div class="order-form-container">
    <form action="process_order.php" method="post">
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
      <div class="order-item">
        <div>
          <label for=" alambres"> Alambres:</label>
          <select class="text-input" id="alambres" name="alambres">
            <option value=""></option>
            <option value="Al Pastor $12.99">Al Pastor - $12.99</option>
            <option value="Chorizo $12.99">Chorizo - $12.99</option>
            <option value="Carnitas $12.99">Carnitas - $12.99</option>
            <option value="Carne Asada $12.99">Carne Asada - $12.99</option>
            <option value="Camaron $13.99">Camaron - $13.99</option>
            <option value="Cecina $12.99">Cecina - $12.99</option>
            <option value="Hawaiiano $12.99">Hawaiiano - $12.99</option>
            <option value="Lengua $12.99">Lengua - $12.99</option>
            <option value="Suadero $12.99">Suadero - $12.99</option>
          </select>
        </div>
        <div><label for="alambres-quantity">Quantity:</label>
          <input class="text-input" type="number" id="alambres-quantity" name="alambres-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="burritos"> Burritos:</label>
          <select class="text-input" id="burritos" name="burritos">
            <option value=""></option>
            <option value="Al Pastor $9.99">Al Pastor - $9.99</option>
            <option value="Barbacoa De Res $10.99">Barbacoa De Res - $10.99</option>
            <option value="Carne Asada $9.99">Carne Asada - $9.99</option>
            <option value="Carnitas $9.99">Carnitas - $9.99</option>
            <option value="Carnitas En Abodo $9.99">Carnitas En Abodo - $9.99</option>
            <option value="Cecina $9.99">Cecina - $9.99</option>
            <option value="Chorizo $9.99">Chorizo - $9.99</option>
            <option value="Pollo A La Mexicana $9.99">Pollo A La Mexicana - $9.99</option>
            <option value="Pollo Ranchero $9.99">Pollo Ranchero - $9.99</option>
            <option value="Burrito Suizo $11.29">Burrito Suizo - $11.29</option>
            <option value="Veggetariano $8.49">Veggetariano - $8.49</option>
          </select>
        </div>
        <div>
          <label for="burritos-quantity">Quantity:</label>
          <input class="text-input" type="number" id="burritos-quantity" name="burritos-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="tacos"> Tacos:</label>
          <select class="text-input" id="tacos" name="tacos">
            <option value=""></option>
            <option value="Al Pastor $2.79">Al Pastor - $2.79</option>
            <option value="Chorizo $2.79">Chorizo - $2.79</option>
            <option value="Carnitas $2.79">Carnitas - $2.79</option>
            <option value="Carne Asada $2.99">Carne Asada - $2.99</option>
            <option value="Cecina $2.99">Cecina - $2.99</option>
            <option value="Pollo A La Mexicana $2.79">Pollo A La Mexicana - $2.79</option>
            <option value="Pollo Ranchero $2.79">Pollo Ranchero - $2.79</option=>
            <option value="Pollo Asado $2.79">Pollo Asado - $2.79</option>
            <option value="Lengua $3.99">Lengua - $3.99</option>
            <option value="Tripa $3.99">Tripa - $3.99</option>
            <option value="Cabeza $2.99">Cabeza - $2.99</option>
            <option value="Suadero $2.79">Suadero - $2.79</optione=>
            <option value="Buche $2.79">Buche - $2.79</option>
            <option value="Carnitas En Abodo $2.79">Carnitas En Abodo - $2.79</option>
            <option value="Barbacoa De Res $2.79">Barbacoa De Res - $2.79</option>
            <option value="Fish Taco $2.99">Fish Taco - $2.99</option>
          </select>
        </div>
        <div>
          <label for="tacos-quantity">Quantity:</label>
          <input class="text-input" type="number" id="tacos-quantity" name="tacos-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="quesadillas"> Quesadillas:</label>
          <select class="text-input" id="quesadillas" name="quesadillas">
            <option value=""></option>
            <option value="Al Pastor $11.49">Al Pastor - $11.49</option>
            <option value="Chorizo $11.49">Chorizo - $11.49</option>
            <option value="Carnitas $11.49">Carnitas - $11.49</option>
            <option value="Carne Asada $11.49">Carne Asada - $11.49</option>
            <option value="Cecina $11.49">Cecina - $11.49</option>
            <option value="Pollo A La Mexicana $11.49">Pollo A La Mexicana - $11.49</option>
            <option value="Pollo Ranchero $11.49">Pollo Ranchero - $11.49</option=>
            <option value="Pollo Asado $11.49">Pollo Asado - $11.49</option>
            <option value="Lengua $11.49">Lengua - $11.49</option>
            <option value="Tripa $11.49">Tripa - $11.49</option>
            <option value="Cabeza $11.49">Cabeza - $11.49</option>
            <option value="Suadero $11.49">Suadero - $11.49</optione=>
            <option value="Buche $11.49">Buche - $11.49</option>
            <option value="Carnitas En Abodo $11.49">Carnitas En Abodo - $11.49</option>
            <option value="Barbacoa De Res $11.49">Barbacoa De Res - $11.49</option>
            <option value="Sincronizada $11.49">Sincronizada - $11.49</option>
          </select>
        </div>
        <div>
          <label for="quesadillas-quantity">Quantity:</label>
          <input class="text-input" type="number" id="quesadillas-quantity" name="quesadillas-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="platillos"> Platillos:</label>
          <select class="text-input" id="platillos" name="platillos">
            <option value=""></option>
            <option value="Al Pastor $12.99">Al Pastor - $12.99</option>
            <option value="Chorizo $12.99">Chorizo - $12.99</option>
            <option value="Carnitas $12.99">Carnitas - $12.99</option>
            <option value="Carne Asada $12.99">Carne Asada - $12.99</option>
            <option value="Cecina $12.99">Cecina - $12.99</option>
            <option value="Pollo A La Mexicana $12.99">Pollo A La Mexicana - $12.99</option>
            <option value="Pollo Ranchero $12.99">Pollo Ranchero - $12.99</option=>
            <option value="Pollo Asado $12.99">Pollo Asado - $12.99</option>
            <option value="Lengua $12.99">Lengua - $12.99</option>
            <option value="Tripa $12.99">Tripa - $12.99</option>
            <option value="Cabeza $12.99">Cabeza - $12.99</option>
            <option value="Suadero $12.99">Suadero - $12.99</optione=>
            <option value="Buche $12.99">Buche - $12.99</option>
            <option value="Carnitas En Abodo $12.99">Carnitas En Abodo - $12.99</option>
            <option value="Barbacoa De Res $12.99">Barbacoa De Res - $12.99</option>
            <option value="Sincronizada $12.99">Sincronizada - $12.99</option>
          </select>
        </div>
        <div>
          <label for="platillos-quantity">Quantity:</label>
          <input class="text-input" type="number" id="platillos-quantity" name="platillos-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="breakfast"> Breakfast:</label>
          <select class="text-input" id="breakfast" name="breakfast">
            <option value=""></option>
            <option value="Chilaquiles $9.99">Chilaquiles - $9.99</option>
            <option value="Huevos Con Jamon $9.99">Huevos Con Jamon - $9.99</option>
            <option value="Huevos Con Chorizo $9.99">Huevos Con Chorizo - $9.99</option>
            <option value="Huevos Rancheros $9.99">Huevos Con Rancheros - $9.99</option>
            <option value="Huevos A La Mexicana $9.99">Huevos A La Mexicana - $9.99</option>
            <option value="Huevos Al Gusto $9.99">Huevos Al Gusto - $9.99</option>
            <option value="Platillo De Tamal $9.99">Platillo De Tamal - $9.99</option>
            <option value="Champurrado $3.99">Champurrado - $3.99</option>
            <option value="Cafe De Olla $2.99">Cafe De Olla - $2.99</option>
          </select>
        </div>
        <div>
          <label for="breakfast-quantity">Quantity:</label>
          <input class="text-input" type="number" id="breakfast-quantity" name="breakfast-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="kids"> Kids Menu:</label>
          <select class="text-input" id="kids" name="kids">
            <option value=""></option>
            <option value="Kids Platillo $5.99">Kids Platillo - $5.99</option>
            <option value="Kids Quesadilla $5.99">Kids Quesadilla - $5.99</option>
            <option value="Kids Taco Combo $5.99">Kids Taco Combo - $5.99</option>
          </select>
        </div>
        <div><label for="kids-quantity">Quantity:</label>
          <input class="text-input" type="number" id="kids-quantity" name="kids-quantity" min="0" max="25">
        </div>
      </div>
      <div class="order-item">
        <div>
          <label for="sides"> Sides:</label>
          <select class="text-input" id="sides" name="sides">
            <option value=""></option>
            <option value="Pico De Gallo $1.99">Pico De Gallo - $1.99</option>
            <option value="Authentic Mexican Rice $2.99">Authentic Mexican Rice - $2.99</option>
            <option value="Refried Pinto Beans $2.99">Refried Pinto Beans - $2.99</option>
            <option value="Fresh Guacamole SM $3.89">Fresh Guacamole SM - $3.89</option>
            <option value="Fresh Guacamole LG $7.49">Fresh Guacamole LG - $7.49</option>
            <option value="House Chips & Salsa $6.99">House Chips & Salsa - $6.99</option>
            <option value="House Chips & Guac $9.99">House Chips & Guac - $9.99</option>
            <option value="Side of Cheese (2oz) $1.29">Side of Cheese (2oz) - $1.29</option>
            <option value="Side of Sour Cream (2oz) $1.29">Side of Sour Cream (2oz) - $1.29</option>
            <option value="Side of Salsa $1.29">Side of Salsa (2oz) - $1.29</option>
          </select>
        </div>
        <div>
          <label for="sides-quantity">Quantity:</label>
          <input class="text-input" type="number" id="sides-quantity" name="sides-quantity" min="0" max="25">
        </div>
      </div>
      <input class="button" type=submit name="submit_order" value="Submit" />
    </form>
  </div>
  <?php include 'footer.html'; ?>
</body>

</html>