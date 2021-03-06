<?php /****************************************
Fichier:        article.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Item-01 - Gestion des articles - Objet article
Date:           30 avril 2020
***********************************************/
   class article
   {
       // Variables
       private $int_id_article;
       private $int_identifiant;
       private $string_nom;
       private $int_quantite;
       private $file_fichier;
       private $int_id_sous_categorie;
       private $int_id_etat;

       // Override __construct
       public function __construct(
           $new_id_article,
           $new_identifiant,
           $new_nom,
           $int_quantite,
           $new_fichier,
           $new_id_sous_categorie,
           $new_id_etat
       ) {
           $this->set_id($new_id_article);
           $this->set_identifiant($new_identifiant);
           $this->set_nom($new_nom);
           $this->set_quantite($int_quantite);
           $this->set_fichier($new_fichier);
           $this->set_id_sous_categorie($new_id_sous_categorie);
           $this->set_id_etat($new_id_etat);
       }

       // Override __toString
       public function __toString()
       {
           $string_return = '';

           $string_return .= "ID: " . $this->get_id();
           $string_return .= " identifiant: " . $this->get_identifiant();
           $string_return .= " nom: " . $this->get_nom();
           $string_return .= " quantite: " . $this->get_quantite();
           $string_return .= " fichier: " . $this->get_fichier();
           $string_return .= " id_sous_categorie: " . $this->get_id_sous_categorie();
           $string_return .= " id_etat: " . $this->get_id_etat();

           return $string_return;
       }

       // Setters
       public function set_id($new_id_article)
       {
           $this->int_id_article = $new_id_article;
       }

       public function set_identifiant($new_identifiant)
       {
           $this->int_identifiant = $new_identifiant;
       }

       public function set_nom($new_nom)
       {
           $this->string_nom = $new_nom;
       }

       public function set_quantite($new_quantite)
       {
           $this->int_quantite = $new_quantite;
       }

       public function set_fichier($new_fichier)
       {
           $this->file_fichier = $new_fichier;
       }

       public function set_id_sous_categorie($new_id_sous_categorie)
       {
           $this->int_id_sous_categorie = $new_id_sous_categorie;
       }

       public function set_id_etat($new_id_etat)
       {
           $this->int_id_etat = $new_id_etat;
       }

       // Getters
       public function get_id()
       {
           return $this->int_id_article;
       }

       public function get_identifiant()
       {
           return $this->int_identifiant;
       }

       public function get_nom()
       {
           return $this->string_nom;
       }

       public function get_quantite()
       {
           return $this->int_quantite;
       }

       public function get_fichier()
       {
           return $this->file_fichier;
       }

       public function get_id_sous_categorie()
       {
           return $this->int_id_sous_categorie;
       }

       public function get_id_etat()
       {
           return $this->int_id_etat;
       }
   }
