<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calendar</title>
</head>
<body>
    
</body>
</html>
<?php
$aujourdhui = date("j"); // Obtenir le jour actuel du mois

echo "<h1>Calendrier de l'Avent Spotter 70 Aviation</h1>";
echo "<div class='calendrier'>";
for ($jour = 1; $jour <= 24; $jour++) {
    if ($jour <= $aujourdhui) {
        echo "<a href='photo.php?jour=$jour'>Jour $jour</a>"; // Lien vers la photo si le jour est arrivé
    } else {
        echo "<span class='jour-lock'>Jour $jour</span>"; // Jour verrouillé
    }
}
echo "</div>";
echo "<div class='admin-container'>";
echo "<p>Utilisez les options ci-dessous pour gérer le calendrier de l'Avent :</p>";
echo "<a href='connexion.php' class='button'>Connexion</a>";
?>