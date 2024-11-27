<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    
</body>
</html>
<?php
session_start();

if ($_SESSION['utilisateur_role'] != 'admin') {
    echo "Accès refusé.";
    exit;
}


echo "<h1>Bienvenue, Administrateur</h1>";
echo "<div class='admin-container'>";
echo "<p>Utilisez les options ci-dessous pour gérer le calendrier de l'Avent :</p>";
echo "<a href='ajouter_photo.php' class='button'>Ajouter une Photo</a>";
echo "</div>";
?>
