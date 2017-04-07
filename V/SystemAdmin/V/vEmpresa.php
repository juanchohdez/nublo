
<div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Datos de la Empresa</h1>
                    <p class="email-content-subtitle">
                         Para modificar los datos de la Empresa haga Click en el botón "Modificar". 
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-4">
                    <button onclick="registrarModal();" type="button" data-toggle="modal" data-target="#myModal" id="nuevo" class="btn btn-default ">Modificar</button>
  </div>



                <?php 
                include("../../../M/mBD.php");

                $sql="SELECT * FROM empresa";
                  if(!$result = $bd->query($sql)){
                echo "ERROR - NO RESULTS FOUND ON DB";
              }
              else{ 

                $count=0;
                while($results = $result->fetch_assoc()){
                $nombrefiscal=$results['nombre_fiscal'];
                $nombrecomercial=$results['nombre_comercial'];
                $cif=$results['cif'];
                $direccion=$results['direccion_empresa'];
                $poblacion=$results['poblacion_empresa'];
                $provincia=$results['provincia_empresa'];
                $codigopostal=$results['codigo_postal_empresa'];
                $telefono=$results['telefono_empresa'];
                $email=$results['email_empresa'];
                $paginaweb=$results['web_empresa'];
                $instagram=$results['instagram_empresa'];
                $facebook=$results['facebook_empresa'];


}}
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST" name="formEmpresas" class="pure-form pure-form-stacked" action="C/cEmpresa.php" id="myForm">
      <div class="modal-header">
      <h3>Modificar Datos de la Empresa
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h3>
      </div>
      <div class="modal-body">
  <div class="pure-g">       
      <legend>Datos de la Empresa</legend>
   <div class="pure-u-1-2">
                <label>Nombre Fiscal: </label>
                </div>
                   <div class="pure-u-1-2">

                <input id="idnombrefiscal" name="nombrefiscal" value="<?php echo $nombrefiscal; ?>" type="text" required autocomplete="off" maxlength="150" />
               
                </div>
   <div class="pure-u-1-2">

                 <label>Nombre Comercial: </label>
                     </div>

                   <div class="pure-u-1-2">

                <input id="idnombrecomercial" name="nombrecomercial" value="<?php echo $nombrecomercial; ?>" type="text" required autocomplete="off" maxlength="150" />
               
                </div>
   <div class="pure-u-1-2">

                <label>CIF: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idcif" name="cif" type="text" required value="<?php echo $cif; ?>" autocomplete="off" maxlength="20" />
               
                </div>    <br>  
                <div  class="modal-footer"></div>
<legend>Ubicación</legend>
                 <div class="pure-u-1-2">

                <label>Dirección: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="iddireccion" name="direccion" type="text" value="<?php echo $direccion; ?>" required autocomplete="off" maxlength="150" />
               
                </div>
      
                  <div class="pure-u-1-2">

                <label>Población: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idpoblacion" name="poblacion" type="text" value="<?php echo $poblacion; ?>" required autocomplete="off" maxlength="150" />
               
                </div>
      
                  <div class="pure-u-1-2">

                <label>Provincia: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idprovincia" name="provincia" type="text" required value="<?php echo $provincia; ?>" autocomplete="off" maxlength="150" />
               
                </div>
      

                  <div class="pure-u-1-2">

                <label>Código Postal: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idcodigopostal" name="codigopostal" type="text" value="<?php echo $codigopostal; ?>" required autocomplete="off" maxlength="20" />
               
                </div> <br>
                <div  class="modal-footer"></div>
<legend>Información de Contacto</legend>

                    <div class="pure-u-1-2">

                <label>Teléfono: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idtelefono" name="telefono" type="text" required value="<?php echo $telefono; ?>" autocomplete="off" maxlength="20" />
               
                </div>

                 <div class="pure-u-1-2">

                <label>E-mail: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idemail" name="email" type="text" required value="<?php echo $email; ?>" autocomplete="off" maxlength="50" />
               
                </div>

                 <div class="pure-u-1-2">

                <label>Página Web: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idpaginaweb" name="paginaweb" type="text" value="<?php echo $paginaweb; ?>" required autocomplete="off" maxlength="50" />
               
                </div>

                
                 <div class="pure-u-1-2">

                <label>Instagram: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idinstagram" name="instagram" type="text" value="<?php echo $instagram; ?>" required autocomplete="off" maxlength="50" />
               
                </div>


                 <div class="pure-u-1-2">

                <label>Facebook: </label>
                           </div>

                   <div class="pure-u-1-2">

                <input id="idfacebook" name="facebook" type="text" required value="<?php echo $facebook; ?>" autocomplete="off" maxlength="50" />
               
                </div>
</div>

        <div id="informacion"></div>

     

      </div>
      
  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="cancelar" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary"  value="Guardar Cambios">
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
              
            </div>

            <div class="email-content-body">
          
               
  <div class="pure-g">       
      <legend>Datos de la Empresa</legend>
   <div class="pure-u-1-1">
                Nombre Fiscal: <label><?php echo strtoupper($nombrefiscal); ?></label>
                </div>
                  
   <div class="pure-u-1-1">

                Nombre Comercial: <label><?php echo strtoupper($nombrecomercial); ?></label>
                     </div>

   <div class="pure-u-1-1">

                CIF: <label><?php echo strtoupper($cif); ?></label>
                           </div>

                  <br>  
                <div  class="modal-footer"></div>
<legend>Ubicación</legend>
                 <div class="pure-u-1-1">

               Dirección: <label><?php echo strtoupper($direccion); ?></label>
                           </div>

                  
      
                  <div class="pure-u-1-1">

               Población: <label><?php echo strtoupper($poblacion); ?></label>
                           </div>

                  
      
                  <div class="pure-u-1-1">

               Provincia: <label><?php echo strtoupper($provincia); ?></label>
                           </div>

                 
      

                  <div class="pure-u-1-1">

               Código Postal: <label><?php echo strtoupper($codigopostal); ?></label>
                           </div>

                   <br>
                <div  class="modal-footer"></div>
<legend>Información de Contacto</legend>

                    <div class="pure-u-1-1">

              Teléfono: <label><?php echo strtoupper($telefono); ?></label>
                           </div>

                  

                 <div class="pure-u-1-1">

              E-mail: <label><?php echo strtoupper($email); ?></label>
                           </div>

                

                 <div class="pure-u-1-1">

               Página Web: <label><?php echo strtoupper($paginaweb); ?></label>
                           </div>


                
                 <div class="pure-u-1-1">

              Instagram: <label><?php echo strtoupper($instagram); ?></label>
                           </div>


                 <div class="pure-u-1-1">

               Facebook: <label><?php echo strtoupper($facebook); ?></label>
                           </div>
</div>













            </div>

<script type="text/javascript">


$(document).ready(function()
{

$("#nuevo").click(function(){
        $.post("V/formEmpresas.php", function(htmlexterno){
   $("#email-content-body").html(htmlexterno);
        });
});    });



    function ModificarModal(){
      

        $('#myModal').modal('show');
      
    }

  
   
</script>
