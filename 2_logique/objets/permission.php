<?php /****************************************
Fichier:        permission.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Usr-01 - Gestion des utilisateurs - Objet permission
Date:           30 avril 2020
***********************************************/
  class permission
  {
      // Variables
      private $int_id_permission;
      private $string_nom;

      // Override __construct
      public function __construct($new_id, $new_nom)
      {
          $this->set_id($new_id);
          $this->set_nom($new_nom);
      }

      // Override __toString
      public function __toString()
      {
          $string_return = '';

          $string_return .= "ID: " . $this->get_id();
          $string_return .= " nom: " . $this->get_nom();

          return $string_return;
      }

      // Setters
      public function set_id($new_id)
      {
          $this->int_id_permission = $new_id;
      }

      public function set_nom($new_nom)
      {
          $this->string_nom = $new_nom;
      }

      // Getters
      public function get_id()
      {
          return $this->int_id_permission;
      }

      public function get_nom()
      {
          return $this->string_nom;
      }
  }
