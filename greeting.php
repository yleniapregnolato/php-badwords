<?php
$text = $_GET["text"];
$censured = $_GET["censured"];
$badwords = "***";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>iL TUO TESTO:</h2>
    <?php echo $text;?>
    <h4>lunghezza del testo: <?php echo strlen($text); ?></h4>
    <h2>LA PAROLA DA CENSURARE:</h2>
    <?php echo $censured; ?>
    <h4>lunghezza del testo: <?php echo strlen($censured); ?></h4>
    <h2>TESTO CON LA PAROLA CENSURATA:</h2>
    <?php
    echo str_ireplace($censured, $badwords, $text); 
    ?>
</body>
</html>