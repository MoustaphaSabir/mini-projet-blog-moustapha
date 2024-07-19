<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>

    <title>Formulaire Ajout</title>
</head>
<body>
    <h1>Administration</h1>

    <a href="description-admin.php">Liste-Article</a>
   
    <h2>Ajout nouveau article</h2>

    <form action="ajoutArticle.php" method="post">
        <label for="url_image">URL de l'image:</label>
        <input type="text" id="url_image" name="url_image" required><br>

        <label for="titre_image">Titre de l'image:</label>
        <input type="text" id="titre_image" name="titre_image" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>
        <label for="image_1"> image_1:</label>
        <input type="text" id="image_1" name="image_1" size="75" required ><br>

        <label for="image_2">image_2:</label>
        <input type="text" id="image_2" name="image_2" size="75" required ><br>

        <label for="image_3">image_3:</label>
        <input type="text" id="image_3" name="image_3" size="75" required><br>

        <input type="submit" value="Ajouter l'article">
        <input type="reset" value="Annuler">
    </form>
</body>
</html>