<?php 
  require_once './data/db.php';


function getUserConnexion($login, $password)
{
    $opdo=getConnexion();
    $sql='SELECT * FROM users WHERE login =:login AND password =:password';
   $req=$opdo->prepare($sql);
   $req->execute(array('login'=>$login, 'password'=>$password ));
return $req;
}

