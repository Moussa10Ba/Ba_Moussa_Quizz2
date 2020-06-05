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