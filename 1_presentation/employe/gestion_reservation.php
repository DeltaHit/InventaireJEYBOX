<?php /****************************************
Fichier:        gestion_reservation.php
Auteur:         Émile, Jérôme et Yannick
Fonctionnalité: FW-Res-02 - Gestion des réservations
Date:           22 avril 2020
***********************************************/ ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- Allows to find search icon for search bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Réservations</title>
  </head>
  <body>

    <nav class="col-m-12 col-12">
      <ul>
        <li><a href="../../index.html"><img src="../../images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>

        <!-- Link to "Consulter Catégories" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('gestion_categorie.php')) {
            echo '<li><a class="button" href="gestion_categorie.php">Catégories</a></li>';
        } else {
            echo '<li><div class="inactive_button">Catégories</div></li>';
        } ?>

        <!-- Link to "Consulter Article" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('gestion_article.php')) {
            echo '<li><a class="button" href="gestion_article.php">Articles</a></li>';
        } else {
            echo '<li><div class="inactive_button">Articles</div></li>';
        } ?>

        <!-- Link to "Consulter Réservations" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('gestion_reservation.php')) {
            echo '<li><a class="active_button" href="gestion_reservation.php">Réservations</a></li>';
        } else {
            echo '<li><div class="inactive_button">Réservations</div></li>';
        } ?>

        <li style="float:right"><div class="navigator">Employé</div></li>
      </ul>
    </nav>

    <table class="itemSelection">
      <!-- Purely here for aesthetic purposes -->
      <tr>
        <th><div class="halfBorderTop"></div></th>
      </tr>

      <!-- Title -->
      <tr>
        <th><h1>Gestion des réservations</h1></th>
      </tr>

      <!-- Search bar -->
      <tr>
        <th>
          <div class="search-container">
            <form action="/action_page.php" class="searchformh">
              <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
              <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </th>
      </tr>

      <!-- En-tête de table -->
            <tr class="entete">
              <th style="width: 20%">Identifiant</th>
              <th style="width: 10%">Date</th>
              <th style="width: 20%">Utilisateur</th>
              <th style="width: 20%">Identifiant Article</th>
              <th style="width: 10%">En cours</th>
              <th style="width: 20%"></th>
            </tr>

      <!-- Réservation #1 -->
      <tr class="item">
        <th>1-0085</th>
        <th>19-04-2020</th>
        <th>JspanLeto</th>
        <th><i class="fa fa-question-circle tooltip"><span class="tooltiptext">ID :  RPI-2010</span></i>   ITM-URPI2010-10001</th>
        <th>
          <form action="/action_page.php">
            <input type="checkbox" id="inprogress" name="inprogress" disabled>
          </form>
        </th>
        <th><a class="button" href="">Supprimer</a></th>
      </tr>

      <!-- Réservation #2 -->
      <tr class="item">
        <th>1-0086</th>
        <th>19-04-2020</th>
        <th>RogueIMvader</th>
        <th><i class="fa fa-question-circle tooltip"><span class="tooltiptext">ID :  BTR-5010</span></i>   ITM-URPI2010-10003</th>
        <th>
          <form action="/action_page.php">
            <input type="checkbox" id="inprogress" name="inprogress" disabled>
          </form>
        </th>
        <th><a class="button" href="">Supprimer</a></th>
      </tr>

      <!-- Réservation #3 -->
      <tr class="item">
        <th>1-0087</th>
        <th>19-04-2020</th>
        <th>BaclavaAreGud</th>
        <th><i class="fa fa-question-circle tooltip"><span class="tooltiptext">ID :  LED-2030</span></i>   ITM-URPI2010-10006</th>
        <th>
          <form action="/action_page.php">
            <input type="checkbox" id="inprogress" name="inprogress" disabled>
          </form>
        </th>
        <th><a class="button" href="">Supprimer</a></th>
      </tr>

      <!-- Réservation #4 -->
      <tr class="item">
        <th>1-0088</th>
        <th>20-04-2020</th>
        <th>HumptyDumpty</th>
        <th><i class="fa fa-question-circle tooltip"><span class="tooltiptext">ID :  RPI-3020</span></i>   ITM-URPI3010-10055</th>
        <th>
          <form action="/action_page.php">
            <input type="checkbox" id="inprogress" name="inprogress" disabled>
          </form>
        </th>
        <th><a class="button" href="">Supprimer</a></th>
      </tr>

      <!-- Réservation #5 -->
      <tr class="item">
        <th>1-0089</th>
        <th>20-04-2020</th>
        <th>RetroQCbuyer</th>
        <th><i class="fa fa-question-circle tooltip"><span class="tooltiptext">ID :  RPI-2010</span></i>   ITM-URPI2020-10062</th>
        <th>
          <form action="/action_page.php">
            <input type="checkbox" id="inprogress" name="inprogress" disabled>
          </form>
        </th>
        <th><a class="button" href="">Supprimer</a></th>
      </tr>

      <!-- Réservation #6 -->
      <tr class="item">
        <th>1-0090</th>
        <th>22-04-2020</th>
        <th>UnforgivingForgiver</th>
        <th><i class="fa fa-question-circle tooltip"> <span class="tooltiptext">ID :  RPI-3020</span> </i>   ITM-URPI3020-10081</th>
        <th>
          <form action="/action_page.php">
            <input type="checkbox" id="inprogress" class="checkboxprog" name="inprogress" disabled>
          </form>
        </th>
        <th><a class="button" href="">Supprimer</a></th>
      </tr>

    </table>

    <br><br>

  </body>
</html>
