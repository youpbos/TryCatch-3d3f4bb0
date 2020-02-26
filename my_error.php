<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <form action="cart.php" method="_GET">
        <input type="number" name="number" id="">
        <button type="submit">submit</button>
    </form>
    <?php
    try {
        if (($_GET["number"] > 0) && ($_GET["number"] < 4)) {
            $_SESSION["choice"] = $_GET["number"];
            echo $_SESSION["choice"];
        } else {
            throw new Exception("geen geldige hoeveelheid");
        }
    } catch (Exception $e) {
        echo "'fout melding gevonden': " . $e->getMessage(), "\n";
    }
    ?>
</body>

</html>