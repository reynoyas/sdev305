<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poppa's Pizza</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <!-- Page header -->
    <div class="jumbotron">
    <h1 class="display-4">Poppa's Pizza</h1>
    <p class="lead">The best pizza GRC students have ever tasted!</p>
    <!--<hr class="my-4">
    <p>Free delivery on orders of $25 or more</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Order Now!</a>-->
    </div>

    <style>
        body{
            padding: 1%;
        }
    </style>
    <!-- preserve formatting -->
    <?php
        // Turn on error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        /*
        echo"<pre>";
        var_dump($_GET);
        echo"</pre>";
        */

        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $method = $_GET['method'];
        // new line to break gives </br> tag
        $address = nl2br($_GET['address']);
        // Toppings is an array so we have to separate it
        $toppings = implode(", ", $_GET['toppings']);
        $size = $_GET['size'];

        echo "<h1>Thank you for your order!</h1>";
        echo "<h2>Order Summary</h2>";
        echo "<p>Name: $fname $lname</p>";
        echo "<p>Meethod: $method</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Toppings: $toppings</p>";
        echo "<p>Size: $size</p>";
    ?>
</body>
</html>