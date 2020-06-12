
const URL_ROOT="index.php?action";

$(function(){ 
     const  $error_message=$("#error_message")
     const $btn_deconnexion=$("#btn_deconnexion")
     const container=$("#container_template");

      
        $error_message.hide()
 
   $("#form_connexion").submit((event)=>{ 
            event.preventDefault();
            $form=$("#form_connexion")// c'est le id du formulaire on doit adapter par raport au id que tu as donné
            url = $form.attr("action" );// on en aura besoin c'est moi qui me suis tromper
            //Faire ici la Validation du Formulaire

            $.post(url,  $form.serialize() ,
               function(data, status){
                     if(data.trim()!="error"){
                      
                         
                             container.load(`${URL_ROOT}=${data}`);
                     }else{
                        $error_message.show();
                     }
               // 
              });     
    })
    
    $("#inscription").on("click",function(){
        container.load(`${URL_ROOT}=inscription`);
    })

   

 
     

  
});