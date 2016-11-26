<html>
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <style>
      .error{color:red ;}
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col col-sm-5">
               <form method="post" action="http://veterinaria.000webhostapp.com/animal/checklogin" autocomplete="off">
                  <h3 style='color:lightblue'>Login</h3>
                  
                  <?php 
                  $Err= "No dejar Ningun Campo Vacio";
                  if (empty($_POST['email'])){
                  $Err = "No dejar Ningun Campo Vacio";
                  
         
                  }
                  elseif (empty($_POST['clave'])){
                  $Err = "No dejar Ningun Campo Vacio";
                           
                  }
                  ?>

                  <span class="error"><?php echo $Err;?></span>
                     
                
                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Email</span>
                     <input type="text" class="form-control" 
                     name="email" required>
                  </div>

                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Clave</span>
                     <input type="password" name="clave" class="form-control" required>
                        
                  </div>
                  <div>
                  
                     <button type="submit" class = "btn btn-primary">Login</button>

                  </div>
                  <br>
                   <div>  
                     <a href='/animal/registrarUsuario' class='btn btn-info '>Registrate</a>
                  </div>   

               </form>
            </div>
         </div>         
      </div>
   </body>
</html>