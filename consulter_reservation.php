<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <!-- Allows to find search icon for search bar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Réservations</title>
  </head>
  <body>
    <nav>
      <ul class="menuUl">
        <li class="menuLi"><img class="imgLogo" src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></li>
        <li class="menuLi"><a class="menuButton" href="#categorie">Catégories</a></li>
        <li class="menuLi"><a class="menuButton" href="#articles">Articles</a></li>
        <li class="menuLi"><a class="menuButton" href="#reservation">Réservations</a></li>
        <li style="float:right"><a class="menuButton" href="#compte">Mon compte</a></li>
      </ul>
    </nav>
    <br>
    <hr>
    <br>
    <h1>Réservations</h1>
    <br><br>
    <!-- Search bar -->
    <div class="search-container">
      <form action="/action_page.php" class="searchformh">
        <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
        <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
      </form>

        <div class="informationstitles">
          <ul>
            <li>Identifiant</li>
            <li>Date</li>
            <li>Utilisateur</li>
            <li>Identifiant article</li>
            <li>En cours</li>
          </ul>
        </div>
      </body>
</html>