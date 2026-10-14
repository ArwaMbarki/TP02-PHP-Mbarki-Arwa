<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <h2>Table de multiplication</h2>
    <?php
    $nombre = 7;
    for ($i = 1; $i <= 10; $i++) {

        echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
    }
    ?>
    <h2>Pyramide</h2>
<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>