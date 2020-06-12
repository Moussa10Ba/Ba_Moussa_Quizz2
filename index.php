<?php
define("WEBROOT","http://localhost/Ba_Moussa_Quizz2");
 require_once ("./traitements/controller.php");
 require_once ("./traitements/fonctions.php");
 require_once ("./data/db.php");
 define("ACTION","action");
     if(isset($_GET[ACTION]))
     {
         if($_GET[ACTION]=='connexion')
         {
             $data=$_POST;
             pageConnexion($data);  // c'est la fonction qui gére la connexion.
         }
         else if($_GET[ACTION]=='inscription')
         {
             require_once './pages/inscription.php';
         }
         
         else if($_GET[ACTION]=='accueil')
         {
            
            if(is_connect()){
                
                if(isset($_GET["page"])){
                  
                    if($_GET["page"]=="listejoueur"){
                        require_once './pages/listejoueur.php';
                       
                    }else if($_GET["page"]=="creerquestion"){
                        
                       require_once './pages/creerquestion.php';
                    }else if($_GET["page"]=="listequestion"){
                        echo "liste Question";
                        require_once './pages/listequestion.php';
                    }else if($_GET["page"]=="inscription"){
                       require_once './pages/inscription.php';
                       echo "inscription";
                    }
                    
                }else{
                   
                    require_once './pages/acceuil.php';
                }
            }else{
                
                require_once './pages/connexion.php'; 
            }
             
         }
         else if($_GET[ACTION]=='jeux')
         {
             require_once './pages/jeux.php';
         }
     }
     else
     {
        require_once './pages/template.php';
        
     }
 

?>