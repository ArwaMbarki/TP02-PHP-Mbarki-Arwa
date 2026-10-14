<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <?php
    $nom = "M'barki";
    $prenom = "Arwa";
    $age =19;
    $formation = "PROGRAMMATION WEB";
    $presentation = "Je m'appelle " . $prenom . " " . $nom .
                    ", j'ai " . $age .
                    " ans et je suis en " . $formation . ".";
    $presentation .= " J'apprends PHP.";
    echo $presentation . "<br><br>";
    $note = 12;
    $Note = 16;
    echo "note = " . $note . "<br>";
    echo "Note = " . $Note;
    ?>
</body>
</html>