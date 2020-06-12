<?php include_once "pages/nav.php";?>
<div class="container-fluid mt-3">
<div class="row">
    <div class="col col-md-2 bg-danger gauche">
         <div class="row">
               <div class="imgavataradmin">
                     <img id="preview" class="">
                 </div>
         </div>
         <button type="button" id="btn_deconnexion" class="btn btn-primary float-right w-80 h-30 mt-5">Deconnexion</button>
         <div class="text">Moussa</div>
        
    </div>
    <div class="col col-md-1">
    
    </div>

    <div class="col col-md-9 bg-primary" id="container-admin">
     
    </div>
</div> 
</div>
<script>
$(function(){
     //Traitement au niveau du Menu Admin

     $(".nav-link").on("click",function(){
       //Récuperation du lien sur lequel l'admin à cliquer
           $lien_encour=$(this);
      //Récuperation de l'url sauvegarder dans l'attribut lien
           const url= $lien_encour.attr("lien");
      //Récuperation de la partie droite de la page layout_admin.php      
           const $container=$("#container-admin"); 
           //Vider le Condenu avant de Faire le Load
             $container.html("")
             $container.load(`${url}`);

})

 //Traitement de Déconnexion
 $("#btn_deconnexion").on("click",()=>{
      $.get(`${URL_ROOT}=deconnexion`, (data, status)=>{
               window.location.replace("index.php")
          });
    })

})
</script>