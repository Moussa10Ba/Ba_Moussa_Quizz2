<?php
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

?>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-5 m-auto sm-auto">
        <div class="card bg-primary mt-5 cadre">
            <div class="card-title text-center mt-3">
            <img src="./public/images/icones/team.png" width="150px" height="150px">
            </div>
            <div class="card-body">
            <form method="POST" action="" id="form_connexion">
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
                    
                        <?php
                        if (isset($error)) {
                            ?>
                            <div class="error">
                                <?php echo $error;?>
                                </div>
                                <?php
                            
                        }
                        ?>
                        
                    
                
            <input type="submit" class="btn btn-success mt-3" name="connexion" id="connexion" value="CONNEXION" >       
            </form>
            <a href="index.php?lien=inscription" class="text float-right text-dark text-decoration-none mt-4 ">S'inscrire pour Jouer?</a>
            </div>
        </div>

    </div>
</div>
</div>
<script>
   const form=document.getElementById("form_connexion");
   const login=document.getElementById("login");
   const password=document.getElementById("password");

   function checkRequired(ArrayInputs){
    ArrayInputs.forEach(input=>{
        if (input.value.trim()==="") {
            showErroor(input,`${RenameInput(input)} is Required`);
        }else{
            showSuccess(input);
        }
    });
}

 function showErroor(input,message){
    const parent=input.parentElement;
    parent.className='row erreur';

    const small=parent.querySelector('small');
    small.innerText=message;
 }
 function showSuccess(input){
     const parent = input.parentElement;
     parent.className='row valide';
 }
 function RenameInput(input){
     return input.id.charAt(0).toUpperCase() + input.id.slice(1);
 }
 form.addEventListener('submit',(e)=>{
    
    
    checkRequired([login,password]);
    e.preventDefault();
    return false;
   
});
</script>
                    
