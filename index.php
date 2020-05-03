<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Menu Principal</title>
</head>

<body>
  <nav>
    <ul>
      <li><div><a href="index.html"><img src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></div></li>

        <!-- Link to "Login page" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('1_presentation/login/main_login.php')) {
            echo '<li><a class="button" href="1_presentation/login/main_login.php">Login page</a></li>';
        } else {
            echo '<li><div class="inactive_button">Login page</div></li>';
        } ?>

        <!-- Link to "Client" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('1_presentation/client/consulter_article.php')) {
            echo '<li><a class="button" href="1_presentation/client/consulter_article.php">Client</a></li>';
        } else {
            echo '<li><div class="inactive_button">Client</div></li>';
        } ?>

        <!-- Link to "Employé" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('1_presentation/employe/gestion_categorie.php')) {
            echo '<li><a class="button" href="1_presentation/employe/gestion_categorie.php">Employé</a></li>';
        } else {
            echo '<li><div class="inactive_button">Employé</div></li>';
        } ?>

        <!-- Link to "Directeur" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('1_presentation/directeur/gestion_utilisateur.php')) {
            echo '<li><a class="button" href="1_presentation/directeur/gestion_utilisateur.php">Directeur</a></li>';
        } else {
            echo '<li><div class="inactive_button">Directeur</div></li>';
        } ?>

        <!-- Link to "php_main.php" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('3_acces_bd/php_main.php')) {
            echo '<li><a class="button" href="3_acces_bd/php_main.php">PHP Operations</a></li>';
        } else {
            echo '<li><div class="inactive_button">PHP Operations</div></li>';
        } ?>

    </ul>
  </nav>
  <br>
  <p style="color: black">Bienvenue au menu principal! <br> Veuillez sélectionner le menu désiré.</p>

  <footer>
    <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Modal try</button>

  <!-- Modal window-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DO NOT PRESS THAT LINK</h4>
        </div>
        <div class="modal-body">
          <iframe src="https://www.youtube.com/embed/L989S2QxXUU" allow="accelerometer;" allowfullscreen></iframe><br><br>
          <a href="https://witcher.fandom.com/wiki/Geralt_of_Rivia" target="_blank">Explore the world</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  </footer>
</body>

</html>
