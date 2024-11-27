<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter une photo</title>
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) {
    $jour = (int)$_POST['jour'];
    $target_dir = "photos/";
    $target_file = $target_dir . "jour" . $jour . ".jpg";

    // Vérifier le type de fichier
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "jpeg") {
        echo "Seules les images JPG sont autorisées.";
    } else {
        // Déplacer le fichier vers le dossier photos
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "La photo pour le jour $jour a été ajoutée avec succès.";
        } else {
            echo "Une erreur s'est produite lors du téléchargement de la photo.";
        }
    }
}
?>

<h1>Ajouter une photo au calendrier</h1>
<form method="POST" enctype="multipart/form-data">
    <label for="jour">Jour :</label>
    <select name="jour" id="jour" required>
        <?php for ($i = 1; $i <= 24; $i++): ?>
            <option value="<?php echo $i; ?>">Jour <?php echo $i; ?></option>
        <?php endfor; ?>
    </select><br><br>
    <label for="photo">Photo (JPG uniquement) :</label>
    <input type="file" name="photo" id="photo" accept="image/jpeg" required><br><br>
    <button type="submit">Ajouter la photo</button>
</form>
