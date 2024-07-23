<?php
require_once 'bdd.php';

$requete = "SELECT * FROM article";
$reponses = $bdd->prepare($requete);
$reponses->execute();
$articles = $reponses->fetchAll(PDO::FETCH_ASSOC);
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Et si jardiner c’était facile ? Retrouvez tous les conseils et astuces de notre expert pour entretenir facilement votre jardin et en profiter. A vous de jouer.">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Accueil_Jardin</title>
    <style>
        img {
            margin-top: 20px;
            width: 500px;
            border-radius: 10px;
           margin-left: 10px;
        }
    </style>
</head>
<body>   
        <button><a href="admin/description-admin.php">Admin-Article</a></button> 
         <strong><h1>Mon blog Jardin</h1></strong>
       
        <?php foreach ($articles as $article): ?>
            <figure>
                <strong><?= htmlspecialchars( $article['titre_image']) . '<br>'?></strong>
                <img src="<?php echo htmlspecialchars ($article['url_image']) ?>" alt="<?= $article['titre_image'] ?>">
                <figcaption>
                    <a class="button" href='descriptionArtcile.php?id=<?= $article['id'] ?>'>Lire l'article</a>

                </figcaption>
            </figure>
        <?php endforeach; ?>

</body>
</html>
