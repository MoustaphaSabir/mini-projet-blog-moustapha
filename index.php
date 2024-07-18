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
    <link rel="stylesheet" href="styles/style.css">
    <title>Jardin</title>
    <style>
                .button {
            display: block;
            text-align: center;
            font-size: 20px;
            text-decoration: none;
            color: white;
            transition: color 0.3s ease;
            border-radius: 6rem solid black;
            background-color: rgb(58, 15, 232);
            cursor: pointer;
            padding: 5px;
        }

        .button:hover {
            filter: brightness(0.7);
            transition: filter 0.3s ease;
        }
    </style>
</head>
<body>
        <?php foreach ($articles as $article): ?>
            <figure>
                <img src="<?php echo htmlspecialchars ($article['url_image']) ?>" alt="<?= $article['titre_image'] ?>">
                <figcaption>
                    <strong><?= htmlspecialchars( $article['titre_image']) ?></strong>
               
                    <a class="button" href='descriptionArtcile.php?id=<?= $article['id'] ?>'>Lire l'article</a>

                </figcaption>
            </figure>
        <?php endforeach; ?>

</body>
</html>
