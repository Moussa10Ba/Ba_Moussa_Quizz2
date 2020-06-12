<html>
<head></head>
<body>
<div class="row ml-1">
    
        <div class="card bg-primary mt-1">
           <div class="card bg-white mt-2 ml-5 mb-5 mr-5">
           <div class="card-title text-center mt-3">
            
            <p class="text text-center font-weight-bold">S'incrire  </br> pour tester votre niveau en Culture Generale</p>
            
            </div>
            <div class="card-body">
         <form id="form" method="post"  enctype="multipart/form-data">
         <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control sous" id="nom" name="nom" placeholder=" Name" required>
                    <small></small>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" class="form-control sous" id="prenom" name="prenom" placeholder="Last Name" required>
                    <small></small>
                </div>
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control sous" id="login" name="login" placeholder="Login" required>
                    <small></small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control sous" id="password" name="password" placeholder="Password" required>
                    <small></small>
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" class="form-control sous" id="password2" name="password2" placeholder="Confirm" required>
                    <small></small>
                </div>


            </div>


            <div class="col  ml-4">
            <div class="form-group">
                    <label for="avatar" class="text text-center">Avatar</label>
                    <br>
                    <div class="row-lg bg-dark">
        <div class="blocavatar"> 
                    <div class="imgavatar">
                     <img id="preview" class="avatarprofil">
                 </div>
             </div>
        </div>
                    <br><br>
                    <input type="file" value="Choisir un fichier" class="btn btn-primary" name="avatar" id="avatar" required accept="png, jpg" onchange="previewImage();">
                    <small></small>
                </div>
                <input type="submit" class="btn btn-primary lg" value="Creer Compte" id="btn-creer">
            </div>
            
        

        </div>     
        </form>
        
            </div>
           </div>
        </div>

    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
 function previewImage(){
                var file = document.getElementById('avatar').files;
                if (file.length > 0) {
                    var fileReader = new FileReader();

                    fileReader.onload = function (event){
                        document.getElementById("preview").setAttribute("src", event.target.result);
                    };
                     fileReader.readAsDataURL(file[0]);
                }else{
                    alert("Trop Grand");
                }
           }
$('document').ready(function(){
    

            $('#form').on('submit',function(e){

                e.preventDefault();
                  
        var form = $(this);
        var dataForm = new FormData(form[0]);
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var login = $('#login').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var avatar = 'avatar';
        
        if(nom == '' || prenom =='' || login =='' || password ==''){
            return false;
        }
        if(password != password2){
            return false;
        }
        

        $.ajax({

                type: "POST",
                url: "http://localhost/BA_Moussa_Quizz2Ajax/traitements/saveUser.php",
                
                contentType:false,
                processData:false,
                data:dataForm,
                dataType: "text",
                success:function(reponse){
                    console.log(reponse);
                }
              
            })
        
        });

});
   
    
            
</script>
</body>
</html>



