<?php
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


?>