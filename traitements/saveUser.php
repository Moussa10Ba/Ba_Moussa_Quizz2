<?php
require_once "../data/db.php";
/*if(isset($_POST['login'])){
    echo "success";
    print_r($_FILES);
}
else{
    echo "failed";
}
/*/  

 $opdo=getConnexion();
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $avatar=$_POST['avatar'];

    $val= array(
        'nom' =>$_POST['nom'],
        'prenom'=>$_POST['prenom'],
        'login'=>$_POST['login'],
        'password'=>$_POST['password'],
        'avatar' =>'photo',
        'profile' => 'joueur',
        'etat_compte'=> 1
    );

    $sql="INSERT INTO users(nom,prenom,login,password,avatar,profile,etat_compte) VALUES (:nom,:prenom,:login,:password,:profile,:avatar,:etat_compte)";
    $req = $opdo->prepare($sql);
    $result= $req->execute($val);

       

