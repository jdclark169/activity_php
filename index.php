<!--Joseph Clark
October 25, 2026!-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Basic PHP Elements</title>
</head>
<body>
    
    <h1>Exploring Basic PHP Elements</h1>

    <p>Joseph Clark</p>

    <p>October 25, 2026</p>

    <?php
        $cameraName = "Sony a6400";
        $quantity = 2;
        $price = 799.99;
        function calculateTotal($quantity, $price)
    {
        return ($quantity * $price);
    }

    echo "<h2>Total cost for " . $cameraName . ": $" . calculateTotal($quantity, $price) . "</h2>";

    echo "<p>PHP is server-side, running on the web server. JavaScript is client-side, running in the browser.</p>";

    ?>
</body>
</html>