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