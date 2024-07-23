<?php
require_once '../bdd.php';

$id = $_GET['id'];

$requete = "SELECT * FROM article where id= $id";
$reponses = $bdd->prepare($requete);
$reponses->execute();
$article = $reponses->fetch(PDO::FETCH_ASSOC);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/> -->
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Formulaire UPDATE</title>
</head>
<body>
    <h1>Administration</h1>

    <a href="description-admin.php">Liste-Article</a> |
    

    <h2>Mettre à jour l'article</h2>
    <form action="traitementUpdate.php?id=<?php echo  $id; ?>" method="post">
        <label for="url_image">URL de l'image:</label>
        <input type="text" id="url_image" name="url_image" size="70" required value="<?php echo  $article["url_image"] ;?>"><br>

        <label for="titre_image">Titre de l'image:</label>
        <input type="text" id="titre_image" name="titre_image" required size="50" value="<?= $article["titre_image"] ;?>"><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" cols="50" rows="5"required value="<?php echo $article["description"] ;?>"></textarea><br>
        <label for="image_1"> image_1:</label>
        <input type="text" id="image_1" name="image_1" size="75" required value="<?php echo  $article["image_1"] ;?>"><br>

        <label for="image_2">image_2:</label>
        <input type="text" id="image_2" name="image_2" size="75" required value="<?php echo  $article["image_2"] ;?>"><br>

        <label for="image_3">image_3:</label>
        <input type="text" id="image_3" name="image_3" size="75" required value="<?php echo  $article["image_3"] ;?>"><br>

        <input type="submit" value="Modifier l'article">
        <input type="reset" value="Annuler">
    </form>
</body>
</html>