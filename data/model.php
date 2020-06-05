<?php 
 function getConnexion()
 {
     $objetPDO="";
     try
     {
       $objetPDO =new PDO( 'mysql:host=localhost;dbname=basequizz;charset=utf8','root','');
        $objetPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $objetPDO;
     }
     catch(PDOException $e)
     {
         die('Erreur D\'acces a la base ');
     }
 }


function getUserConnexion($login, $password)
{
    $opdo=getConnexion();
    $sql='SELECT * FROM users WHERE login =:login AND password =:password';
   $req=$opdo->prepare($sql);
   $req->execute(array('login'=>$login, 'password'=>$password ));
return $req;
}

function insertUser($Array){
    $opdo=getConnexion();
    $sql='INSERT INTO  users  login =:login AND password =:password';
}