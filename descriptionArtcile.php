<?php
require_once 'bdd.php';

$requete = "SELECT * FROM article where id = " . $_GET['id'];
$reponses = $bdd->prepare($requete);
$reponses->execute();
$articles = $reponses->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>description Article</title>
</head>
<body>
        <?php foreach ($articles as $article): ?>
            <figure>
                <img src="<?php echo htmlspecialchars ($article['url_image']) ?>" alt="<?= $article['titre_image'] ?>"/>
                    <strong><?= htmlspecialchars( $article['titre_image']) ?></strong>
                    <p><?= htmlspecialchars( $article['description']) ?></p>
                <figcaption>
                    <img src="<?php echo htmlspecialchars ( $article['image-1']) ?>" alt="<?= $article['titre_image'] ?>"/>
                    <img src="<?php echo htmlspecialchars ($article['image-2']) ?>" alt="<?= $article['titre_image'] ?>"/>
                    <img src="<?php echo htmlspecialchars ($article['image-3']) ?>" alt="<?= $article['titre_image'] ?>"/>
                    <img src="<?php echo htmlspecialchars ($article['image-4']) ?>" alt="<?= $article['titre_image'] ?>"/>
                    <a class="boutton"  href='index.php?id=<?= $article['id'] ?>'>Retour d'accueil</a>
                </figcaption>
            </figure> 
        <?php endforeach ?>
</body>
</html>