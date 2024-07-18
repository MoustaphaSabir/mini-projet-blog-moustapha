<?php
require_once '../bdd.php';

// Requette pour supprimer une colonne

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer et exécuter la requête pour supprimer la tâche
    $req = $bdd->prepare('DELETE FROM article WHERE id = :id');
    $req->execute(['id' => $id]);

    // Rediriger vers la page principale
    header('Location: description-admin.php');
    exit;
}
