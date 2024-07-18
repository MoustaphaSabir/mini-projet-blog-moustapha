<?php
require_once '../bdd.php';

$id = $_GET['id'];
$url_image = $_POST['url_image'];
$titre_image = $_POST['titre_image'];
$description = $_POST['description'];

$requete = $bdd->prepare("UPDATE article SET url_image=:url_image, titre_image =:titre_image ,description= :description
						  WHERE id =:id");

$requete->execute(['id' => $id, 'url_image' => $url_image, 'titre_image' => $titre_image, 'description' => $description]);


header('Location: description-admin.php');
exit;
