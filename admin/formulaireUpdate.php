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
    <title>Document</title>
</head>
<body>
    <h1>Administration</h1>

    <a href="description-admin.php">Liste-Article</a> |
    

    <h2>Mettre à jour l'article</h2>
    <form action="traitementUpdate.php?id=<?php echo  $id; ?>" method="post">
        <label for="url_image">URL de l'image:</label>
        <input type="text" id="url_image" name="url_image" required value="<?php echo  $article["url_image"] ;?>"><br>

        <label for="titre_image">Titre de l'image:</label>
        <input type="text" id="titre_image" name="titre_image" required value="<?php echo  $article["titre_image"] ;?>"><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required value="<?php echo  $article["description"] ;?>"></textarea><br>

        <input type="submit" value="Modifier l'article">
        <input type="reset" value="Annuler">
    </form>
</body>
</html>