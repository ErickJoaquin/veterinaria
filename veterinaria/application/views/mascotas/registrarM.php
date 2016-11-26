<html>
   <head>
      <meta charset="utf-8">
      <title>Registrarse</title>
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
               <form method="post" action="http://veterinaria.000webhostapp.com/animal/registrarM" autocomplete="off">
                  <h3 style='color:lightblue'>Registrar Mascota</h3>
                  
                  <?php 
                  $Err = "No dejar Ningun Campo Vacio";
                  ?>

                  <span class="error"><?php echo $Err;?></span>
                     
                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Nombre</span>
                     <input type="text" class="form-control"
                       name="nombre" >
                  </div>
                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Fecha de nacimiento</span>
                     <input type="date" class="form-control" 
                     name="fn"required>
                  </div>
                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Tipo</span>
                     <select  name="tipo" class="form-control"  required>
                        <option></option>
                        <option>Perro</option>
                        <option>Gato</option>
                        <option>Ave</option>
                        <option>etc</option>

                     </select>
                  </div>

                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Raza</span>
                     <input type="text" name="raza" class="form-control" required>
                        
                  </div>


                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Peso</span>
                     <input type="number" name="peso" class="form-control" required>
                        
                  </div>

                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Color</span>
                     <input type="color" name="color" class="form-control" required>
                        
                  </div>

                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Foto</span>
                     <input type="file" name="foto" class="form-control" required>
                        
                  </div>

                  <div class = "form-group input-group">
                     
                     <span class= "input-group-addon">Comentario</span>
                     <textarea row="5" name="comentario" class="form-control" required>
                     </textarea>
                  </div>
                  
                    <div>  
                     <button type="submit" class = "btn btn-primary">Guardar</button>
                  </div> <br>

                  <div>  
                     <a href='http://veterinaria.000webhostapp.com/animal/cerrarSesion' class='btn btn-info '>Salir</a>
                  </div>   
                  
               </form>
            </div>
         </div>         
      </div>
   </body>
</html>