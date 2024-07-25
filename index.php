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
    <link rel="stylesheet" href="styles/style.css">
    <title>Accueil_Jardin</title>
</head>
<body>
    <div class="container">
        <button class="admin-button"><a href="admin/description-admin.php">Admin-Article</a></button>
        <strong><h1>Mini blog Jardin</h1></strong>

        <div class="articles">
            <?php foreach ($articles as $article): ?>
                <figure class="article">
                    <h2><strong><?= htmlspecialchars($article['titre_image']) ?></strong></h2>
                    <div class="container-image">
                        <img src="<?= htmlspecialchars($article['url_image']) ?>" alt="<?= htmlspecialchars($article['titre_image']) ?>">
                    </div>
                    <figcaption>
                        <a class="button" href='descriptionArtcile.php?id=<?= $article['id'] ?>'>Lire l'article</a>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>

    <footer>
        <div class="bloc-contact">
            <a href="mailto:cheniadam3@gmail.com">cheniadam3@gmail.com</a>
            <a href="tel:+605954312">0605954312</a>
            <a href="http://www.linkedin.com/in/moustapha-sabir-moussa-5b00a0228" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="http://https://www.google.com/maps/place/86000+Poitiers/@46.584682,0.3301719,13z/data=!3m1!4b1!4m6!3m5!1s0x47fdbe72439eb3ab:0x97de2319c5e09093!8m2!3d46.5798429!4d0.3416875!16zL20vMGRsMmc?entry=ttu" target="_blank" rel="noopener noreferrer">86000 Poitiers</a>
            <a href="https://www.facebook.com/DmaGarden/" target="_blank" rel="noopener noreferrer">Facebook</a>
            <a href="https://www.pinterest.fr/drawmeagarden/" target="_blank" rel="noopener noreferrer">Pinterest</a>
        </div>
        <a href="formulaire.php" class="contact-button">CONTACT-MOI</a>
        <p>© Copyright 2024 | Tous droits réservés</p>
        <ul>
            <li>Mentions légale</li>
            <li>Plan du site</li>
        </ul>
    </footer>
</body>
</html>