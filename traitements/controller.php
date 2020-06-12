<?php 
 require_once './data/model.php';

 function pageConnexion($post)
 {
     $login=$post['login'];
     $password=$post['password'];

     $result=getUserConnexion($login, $password);
     
        $result_array = $result->fetch();
     if($result_array !== false)
     {

        if($result_array['profile']=="admin")
        {
            echo "accueil";// maintenant ca renvoit accueil
           // require_once './pages/acceuil.php';
        }
        else
        {
            echo "jeux ";
          //  require_once './pages/jeux.php';
        }
     }
     else
     {
         echo "error";
     }

 }
 

 

 