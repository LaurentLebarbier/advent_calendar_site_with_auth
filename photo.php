<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Photo</title>
</head>
<body>
    
</body>
</html>
<?php
$jour = isset($_GET['jour']) ? (int)$_GET['jour'] : 1;
if ($jour <= date("j")) { // Afficher l'image uniquement si la date est atteinte
    echo "<div class='photo-container'><img src='photos/jour$jour.jpg' alt='Photo jour $jour'></div>";
} else {
    echo "<p>Patience, cette photo n'est pas encore disponible.</p>";
}
?>
