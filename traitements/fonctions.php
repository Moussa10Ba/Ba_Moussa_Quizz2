<?php
   function connexion($login,$pwd){
    $users=getUsers();
    foreach ($users as $key => $user) {
        if ($user["login"]==$login && $user["password"]==$pwd) {
            $_SESSION['user']=$user;
            $_SESSION['statut']="login";
                if ($user["profil"]==="admin") {
                   return "acceuil";
                }else{
                    return "jeux";
                }
        }
        
    }
    return "error";
}

function getUsers(){
  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=basequizz;charset=utf8', 'root', '');
      return $reponses = $bdd->query('SELECT * FROM users ');
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
          return false;
  }
  
  
  
}



