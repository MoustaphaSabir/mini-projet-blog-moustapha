<?php
require_once '../bdd.php';

// Récupérer les données envoyées via POST
$url_image = $_POST['url_image'];
$titre_image = $_POST['titre_image'];
$description = $_POST['description'];


    // Préparer et exécuter la requête pour insérer le  nouveau article
    $req = $bdd->prepare('INSERT INTO article (url_image, titre_image, description) VALUES (:url_image, :titre_image, :description)');
    $req->execute(['url_image' => $url_image, 'titre_image' => $titre_image, 'description' => $description]);

    // Rediriger vers la page principale
    header('Location: description-admin.php');
    exit;

