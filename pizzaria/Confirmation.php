<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="Sinan Emir Kahraman" content="Pizza site" />
  <link rel="shortcut icon" href="Images/emoji-face-for-website-symbol-icon-presentation-free-vector.jpg" type="image/x-icon" />
  <title>Pizza Order Confirmation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      text-align: center;
      padding-top: 40px;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      margin-bottom: 40px;
    }

    h1 {
      margin: 0;
      letter-spacing: 2px;
    }

    main {
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      max-width: 600px;
      margin: 0 auto;
    }

    img {
      display: block;
      margin: 0 auto;
      margin-bottom: 20px;
    }

    h2 {
      margin-top: 20px;
      color: #333;
      font-size: 24px;
    }

    p {
      margin: 10px 0;
      color: #666;
    }

    ul {
      list-style-type: none;
      padding: 0;
      text-align: left;
    }

    li {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Pizza Order Confirmation</h1>
  </header>
  <img src="images/Thumsup.jpg" alt="Thumbs up" height="150" width="150">
  <main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $quantity = $_POST["quantity"];
      $size = $_POST["size"];
      $shape = $_POST["shape"];
      $toppings = $_POST["toppings"];
      $crust = $_POST["crust"];
      $delivery = $_POST["delivery"];

      echo "<h2>Thank you, $name, for your order!</h2>";
      echo "<p>We have received your order for $quantity $size $shape pizza(s) with the following details:</p>";
      echo "<ul>";
      echo "<li>Toppings: " . implode(", ", $toppings) . "</li>";
      echo "<li>Crust: $crust</li>";
      echo "<li>Delivery Type: $delivery</li>";
      echo "</ul>";
    }
    ?>
  </main>
</body>
</html>









