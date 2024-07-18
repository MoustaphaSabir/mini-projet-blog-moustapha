<?php
require_once '../bdd.php';


$requete = "SELECT * FROM article";
$reponses = $bdd->prepare($requete);
$reponses->execute();
$articles = $reponses->fetchAll(PDO::FETCH_ASSOC);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/> -->

    <title>Article-ADmin</title>
</head>
<body>
    
    <h1>Administration</h1>
    <a href="ajoutFormualire.php">Ajout Formulaire</a>|
    <h2>Liste-Article</h2>

        <?php foreach ($articles as $article): ?>
            <figure>
                <img src=".<?php echo htmlspecialchars ($article['url_image']) ?>" alt="<?= $article['titre_image'] ?>">
                <figcaption>
                    <strong><?php echo htmlspecialchars( $article['titre_image']) ?></strong>
                 
                    <a class="button" href='./descriptionArtcile.php?id=<?= $article['id'] ?>'>Lire l'article</a>
                    <br>
                    <a href="formulaireUpdate.php?id=<?= $article['id'] ?>">Modifier l'article</a>
                    <br>
                    <a  href='delete.php?id=<?= $article['id'] ?>'>Suppprimer</a>

                </figcaption>
            </figure>
        <?php endforeach; ?>
</body>
</html>