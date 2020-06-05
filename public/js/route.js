const form =document.getElementById('form_connexion');
const container=document.getElementById('container');
const inscription = document.getElementById('inscription');

inscription.addEventListener('click',()=>{
    sendData('inscription',container,false);
})

form.addEventListener('submit',()=>{

    sendData('connexion',container,true);
 
})

function sendData(action,conten,is_post)
{
    var ajx= new XMLHttpRequest();
    ajx.onreadystatechange=()=>
    {
        if((ajx.readyState==4) && ajx.status==200)
        {
            let data=ajx.responseText;
            if(data=="error")
            {
                  alert(" une erreur s est produit");
            }
            else
            {
                conten.innerHTML=data;
            }
        }
    } 

    var donnee="";
    if(is_post)
    {
        donnee=getFormData();
    }
    ajx.open('POST',`index.php?action=${action}`,true);
    ajx.send(donnee);
    return false;
}
function getFormData()
{
    var form=document.getElementById('form_connexion');
    var donnee=new FormData(form);

   return donnee;
}


