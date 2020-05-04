<?php
include_once "../3_acces_bd/moteur_requetes_bd.php";

// Gestionnaires
include_once "gestionnaires/gestionnaire_article.php";
include_once "gestionnaires/gestionnaire_categorie.php";
include_once "gestionnaires/gestionnaire_login.php";
include_once "gestionnaires/gestionnaire_reservation.php";
include_once "gestionnaires/gestionnaire_utilisateur.php";

// Objets
include_once "objets/article.php";
include_once "objets/categorie_article.php";
include_once "objets/contact_urgence.php";
include_once "objets/etat.php";
include_once "objets/permission.php";
include_once "objets/reference.php";
include_once "objets/reservation.php";
include_once "objets/sous_categorie_article.php";
include_once "objets/utilisateur.php";

$moteurRequetes = new moteurRequetesBD();

// Gestionnaire Articles
$monArticle = gestionnaireArticle::fetchArticleFromBD($moteurRequetes, 1);
$maReference = gestionnaireArticle::fetchReferenceFromBD($moteurRequetes, 1);
$monEtat = gestionnaireArticle::fetchEtatFromBD($moteurRequetes, 1);

// Gestionnaire Categorie
$maCategorieArticle = gestionnaireCategorie::fetchCategorieArticleFromBD($moteurRequetes, 1);
$maSousCategorieArticle = gestionnaireCategorie::fetchSousCategorieArticleFromBD($moteurRequetes, 1);

// Gestionnaire reservation
$maReservation = gestionnaireReservation::fetchReservationFromBD($moteurRequetes, 1);

// Gestionnaire utilisateur
$maPermission = gestionnaireUtilisateur::fetchPermissionFromBD($moteurRequetes, 1);
$monUtilisateur = gestionnaireUtilisateur::fetchUtilisateurFromBD($moteurRequetes, "jeclient");
$monContactUrgence = gestionnaireUtilisateur::fetchContactUrgenceFromBD($moteurRequetes, 1);

// Test affichage
echo "Article: " . $monArticle . "<br>";
echo "Reference: " . $maReference . "<br>";
echo "Etat: " . $monEtat . "<br>";
echo "<br>";
echo "Catégorie article: " . $maCategorieArticle . "<br>";
echo "Sous catégorie article: " . $maSousCategorieArticle . "<br>";
echo "<br>";
echo "Réservation: " . $maReservation . "<br>";
echo "<br>";
echo "Permission: " . $maPermission . "<br>";
echo "Utilisateur: " . $monUtilisateur . "<br>";
echo "Contact urgence: " . $monContactUrgence . "<br>";
echo "<br>";
