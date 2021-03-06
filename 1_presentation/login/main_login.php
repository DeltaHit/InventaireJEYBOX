<?php /****************************************
Fichier:        main_login.php
Auteur:         Émile, Jérôme et Yannick
Fonctionnalité: FW-Log-01 - Gestion des logins
Date:           22 avril 2020
***********************************************/ ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>S'authentifier</title>
  </head>
  <body>
<main>

  <article class="paddingTop">
    <img src="../../images/JEYBOX_Logo_1037x300.png" class="logo center" alt="Jey Box" >
  </article>

  <div class="window">
    <form class="login" action="index.html" method="get">
      <label class="title">Connexion</label>
      <br>
      <br>
      <hr>
      <br>
      <label for="txtuser" class="labelLeft customPadding1">Utilisateur</label><br>
      <input id="txtuser" type="text" name="txtuser" value="" placeholder="Admin" class="txtbox" required>
      <br>
      <br>
      <label for="txtpass" class="labelLeft customPadding2">Mot de passe</label><br>
      <input id="txtpass" type="password" name="txtpass" value="" class="txtbox">
      <br>
      <br>
      <br>
      <input type="submit" name="btnlogin" class="btnLog" value="Se connecter">
      <br>
      <br>
      <a href="password_forgotten.php" title = "Récupérez votre mot de passe" class="forgot">Mot de passe oublié ?</a>
    </form>
  </div>

</main>
  </body>
</html>
