<?php
  require_once './traitements/controller.php';
 

 
     if(isset($_GET["action"]))
     {
 
         if($_GET["action"]=='connexion')
         {
 
             $data=$_POST;
             pageConnexion($data);
            
         }
         else if($_GET["action"]=='inscription')
         {
 
             require_once './pages/inscription.php';
         }
     }
     else
     {
 
             require_once './pages/template.php';
     }
     