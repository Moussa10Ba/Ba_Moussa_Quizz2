<!doctype html>
<html lang="en">
  <head>
    <title>Quizz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/css/mystyle.css">
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/css/fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
  </head>
  <body>
  <nav class="navbar navbar-light haut">
        <a class="navbar-brand" href="#">
          <img src="./public/images/icones/logo.png"  width="50" height="90" alt="" loading="lazy">
        </a>
        <div class="row justify-content-center">
        <h1 class="text float-left font-weight-bold text-white">LE PLAISIR DE JOUER</h1>
        </div>
  </nav>
     
   <?php
   require_once('traitements/fonctions.php');
   /*require_once('data/donnees.php');
  $getUsers=getUsers();
  if ($getUsers!=false) {
    while($user=$getUsers->fetch()){
      echo $user['prenom'];
    }
  }*/

   


  if (isset($_GET['lien'])){
      if($_GET['lien']=="inscription") {
        require_once("pages/inscription.php");
      }
      if($_GET['lien']=="acceuil") {
        require_once("pages/acceuil.php");
   }if($_GET['lien']=="jeux"){
       require_once("pages/jeux.php");
   }
  }else{
    require_once("pages/login.php");
  }
  
   ?>

    
  </body>
</html> 