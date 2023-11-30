<?php
require "modeles/ModeleSBAteliers.php";

session_start();
if (!isset($_SESSION['numero'])) {
    exit("Utilisateur non connecté !");
}

$numeroClient = $_SESSION['numero'];
$numeroAtelier = $numAtelier;

$atelier = ModeleSBAteliers::getAtelier($numeroAtelier);
$ateliersParticipes = ModeleSBAteliers::getParticipations($numeroClient);

$clientParticipe = false;
foreach ($ateliersParticipes as $atelierParticipe) {
    if ($atelierParticipe['atelier'] == $numeroAtelier) {
        $clientParticipe = true;
        break;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    ModeleSBAteliers::supprimerCommentaire($numeroClient, $numeroAtelier);
    // Redirection vers la même page pour actualiser la vue
    header("Location: /sbateliers/ateliers/$numeroAtelier/commentaires/voir");
    exit();
}

$commentaires = ModeleSBAteliers::getCommentairesAtelier($numeroAtelier);
require "vues/vue-commentaires-atelier.php";

?>
