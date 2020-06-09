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

function saveUser($post){
    $opdo=getConnexion();
    $nom=$post['nom'];
    $prenom=$post['prenom'];
    $login=$post['login'];
    $password=$post['password'];
    $avatar=$post['avatar'];

    $val= array(
        'nom' =>$post['nom'],
        'prenom'=>$post['prenom'],
        'login'=>$post['login'],
        'password'=>$post['password'],
        'avatar' => /*$_FILES['avatar']*/'photo',
        'etat_compte'=> 1
    );

    $opdo=getConnexion();

    $sql="INSERT INTO users(nom,prenom,password,avatar,profile,etat_compte) VALUES (:nom,:prenom,:login,:password,:avatar:,etat_compte)";
    $req = $opdo->prepare($sql);
    $result= $req->execute($val);
    //echo json_encode($result);
}
