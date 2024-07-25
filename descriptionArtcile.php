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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/description.css">
    <title>description Article</title>
    <!-- <style>
        img {
            width: 300px;
        }
    </style> -->
</head>
<body>
    <main>
        <div class="contenair">
            <a href="index.php">Retour à l'accueil</a>
            <?php foreach ($articles as $article): ?>
                <div class="projet">
                        <h2><?= htmlspecialchars( $article['titre_image']) . "<br>"; ?></h2>
                        <div class="image-container">
                            <img src="<?php echo htmlspecialchars ($article['url_image']) ?>" alt="<?= $article['titre_image'] ?>"/>
                            <p><?= htmlspecialchars( $article['description']) ?></p>
                            <img src="<?php echo htmlspecialchars ($article['image_1']) ?>" alt="<?= $article['titre_image'] ?>"/>
                            <img src="<?php echo htmlspecialchars ($article['image_2']) ?>" alt="<?= $article['titre_image'] ?>"/>
                            <img src="<?php echo htmlspecialchars ($article['image_3']) ?>" alt="<?= $article['titre_image'] ?>"/>
                        </div>
                        <a class="button"  href='index.php?id=<?= $article['id'] ?>'>Retour d'accueil</a>
                </div> 
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>