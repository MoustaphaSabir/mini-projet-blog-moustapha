<?php
require_once '../bdd.php';

$id = $_GET['id'];
$url_image = $_POST['url_image'];
$titre_image = $_POST['titre_image'];
$description = $_POST['description'];
$image_1 = $_POST['image_1'];
$image_2 = $_POST['image_2'];
$image_3 = $_POST['image_3'];

$requete = $bdd->prepare("UPDATE article SET url_image=:url_image, titre_image=:titre_image, description=:description, image_1=:image_1, image_2=:image_2, image_3=:image_3
                          WHERE id=:id");

$requete->execute([
    'id' => $id, 
    'url_image' => $url_image, 
    'titre_image' => $titre_image, 
    'description' => $description, 
    'image_1' => $image_1, 
    'image_2' => $image_2, 
    'image_3' => $image_3
]);

header('Location: description-admin.php');
exit;
?>

