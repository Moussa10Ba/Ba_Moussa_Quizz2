<?php
/*
if (isset($_POST['connexion'])) {
  var_dump($_POST);
  if (empty($_POST['login'])) {
      $error="Renseigner Le Login";
  }elseif (empty($_POST['password'])) {
    $error="Renseigner Le Password";
}else{
        $login=$_POST['login'];
        $password=$_POST['password'];
        $result=connexion($login,$password);
        echo $result;
        
        if ($result=="error") {
            $error= "Login ou Password incorrect";
        }else{
            header("location:index.php?lien=".$result."&pagination=1");
        }
        
}
}
*/
?>
<div class="row">
    <div class="col-lg-5 m-auto sm-auto">
        <div class="card bg-primary mt-5 cadre">
            <div class="card-title text-center mt-3">
            <img src="./public/images/icones/team.png" width="150px" height="150px">
            </div>
            <div class="card-body">
            <form id="form_connexion" action="Javascript:void(0);">
                    <div class="form-group">
                        <label for="login" class="control-label">Login</label>
                        <div class="row ">
                            <div class="input-group-adon">
                                 <i class="fa fa-user fa-3x"></i>
                            </div>
 
                            <input type="text" class="form-control-lg" name="login" id="login">
                            <small></small>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="control-label">Password</label>
                        <div class="row">
                            <div class="input-group-adon">
                                 <i class="fa fa-lock fa-3x"></i>
                            </div>
                            <input type="password" class="form-control-lg " name="password" id="password" >
                            <small></small>
                           </div>
                    </div>                            
<input type="submit" class="btn btn-success mt-3 btn-block lg" name="connexion" id="connexion" value="Connexion" />   
    <input type="button" id="inscription"  class="btn btn-primary mt-3 btn-block lg" name="inscription" value="Inscription">    
    </form>
    
            </div>
        </div>

    </div>
</div>

<?php
                        /*
                        if (isset($error)) {
                            ?>
                            <div class="error">
                                <?php echo $error;?>
                                </div>
                                <?php
                            
                        }
                        */
                        ?>                   
