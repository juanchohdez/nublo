
<div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Notas de Preparación</h1>
                    <p class="email-content-subtitle">
                         Para crear una nueva Nota presione el botón "Nuevo+", para consultar ó modificar una Nota existente haga Click en la opción del listado que desee revisar. 
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button onclick="registrarModal();" type="button" data-toggle="modal" data-target="#myModal" id="nuevo" class="btn btn-default ">Nuevo+</button>
  </div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST" name="formcategorias" action="C/cNota.php" id="myForm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Notas de Preparación</h4>
      </div>
      <div class="modal-body">
        <div class="pure-g">
   <div class="pure-u-1-1">
                <label>Descripción: </label>
                </div>
                   <div class="pure-u-1-1">

                <input id="iddescripcion" name="descripcion" type="text" required autocomplete="off" maxlength="25" />
                <input id="idnota" name="idnota" type="hidden" value="NULL"  />
                <input id="idaccion" name="accion" type="hidden" value=""  />
                </div>

          
   <div class="pure-u-1-1">
 
                <input type="checkbox" id="idenlazado" onclick="esconderlistado()" name="enlazado">  <label for="idenlazado"> Enlazado a Familia o Categoría: </label>
                  </div>
                  

 <div class="pure-u-1-1">
 <br>

               

<table id="idtabla" class="hidden pure-table">
 <label > Listado de Familias y Categorías</label>
    <thead>
        <tr>
            
            <th>Nombre</th>
            <th>Categoría o Familia</th>
            <th>Enlazado</th>
        </tr>
    </thead>

    <tbody>

             <?php 
                include("../../../M/mBD.php");

                $sql="SELECT * FROM categorias";
              if(!$result = $bd->query($sql)){
               
              }
              else{ 

            $strippedvalue=TRUE;
           
                while($results = $result->fetch_assoc()){
                $nombre_categoria=$results['nombre_categoria'];
            $id_categoria=$results['ID'];

            $stripped="<tr class='pure-table-odd'>";
            if($strippedvalue==TRUE){
              echo $stripped;
            }
            else{
              echo "<tr>";
            }
            echo "
            <td>".$nombre_categoria."</td>
            <td>Categoría</td>
            <td><input type='checkbox' id='enlazado' name='enlazadocategoria[]' value='".$id_categoria."'</td>";

            $strippedvalue=!$strippedvalue;
}

 $sql="SELECT * FROM familias";
              if(!$result = $bd->query($sql)){
               
              }
              else{ 

            
                while($results = $result->fetch_assoc()){
                $nombre_familia=$results['nombre_familia'];
            $id_familia=$results['ID'];


             $stripped="<tr class='pure-table-odd'>";
            if($strippedvalue==TRUE){
              echo $stripped;
            }
            else{
              echo "<tr>";
            }
            echo "
            <td>".$nombre_familia."</td>
            <td>Familia</td>
            <td><input type='checkbox' id='enlazado' name='enlazadofamilia[]' value='".$id_categoria."'</td>";

            $strippedvalue=!$strippedvalue;
}

} } ?>
          </tr>
        </tbody>
      </table>
  </div>
        <div id="informacion"></div>

     

      </div>
      </div>
      <div id="btnEliminar2" class="modal-footer">
       <input type="button" id="btnEliminar" style="align: left;" class="btn btn-danger" value="Eliminar" onclick="Eliminar();"></button>
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
            <p><h4>Lista de Notas</h4></p>
                <table class="table table-bordered   table-hover">
                        <tr class="success">
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Nota General</th>
                            <th>Familia o Categoría que Aplica</th>
                            
                        </tr>

             
                <?php 
             
                             include("../../../M/mBD.php");

                $sql2="SELECT * FROM notas_preparacion";
              if(!$res = $bd->query($sql2)){ // IF nro 1
               
                echo "Error Fetching Data";
                
              }  // Termina IF nro 1


              else{ // ELSE nro 1


                  if($res->num_rows ==0){  // IF nro 2
                 print "Sin resultados";
                 }      // Termina IF nro 2

                   else{    // ELSE nro 2

                         $count_enlazado=0;
                         $count_enlaces=0;
                          $count=0;
                          while($results = $res->fetch_assoc()){         // WHILE nro 1
                          $descripcion=$results['descripcion_nota'];
                          $id_nota=$results['ID'];



//------------------------------------------NOTA_FAMILIA---------------------------------------




                          $sql2="SELECT * FROM nota_familia where id_nota = '".$id_nota."' ";
                                       if(!$result2 = $bd->query($sql2)){         // IF nro 3
                                       
                                        echo "Error Fetching Data";
                                        
                                       }          // Termina IF nro 3
                                                  else {                // ELSE nro 3
                                                                  if($result2->num_rows ==0){             // IF nro 4
                                                                    $general_familia = "Si";      
                                                                    $id_enlazados=" ";

                                                                        $count++;
                                                                       
                                                                    }                         // Termina IF nro 4
           
                                                                   else{                  // ELSE nro 4
                                                                      while($results2 = $result2->fetch_assoc()){           // While nro 2
                                                                                      $general_familia = "No";
                                                                                      $id_familia=$results2['id_familia'];

                                                                                       $sql3="SELECT * FROM familias where ID = '".$id_familia."' ";
                                                                                                                             if(!$result3 = $bd->query($sql3)){ }
                                                                                                                              else{
                                                                                                                                   while($results4 = $result3->fetch_assoc()){   
                                                                                                                                     $id_enlazados [$count_enlazado] [$count_enlaces] =$results4['nombre_familia'];
                                                                                                                                   }}                                       



                                                                                       echo '<script>
                                                                                              var tempArr'.$count.' = new Array();
                                                                                                 tempArr'.$count.'[0]= "'.$results['descripcion_nota'].'";
                                                                                             
                                                                                                
                                                                                                  tempArr'.$count.'[1]= "'.$id_nota.'";
                                                                                                  tempArr'.$count.'[2]= "'.$general_familia.'";
                                                                                                  tempArr'.$count.'[3]= "'.$id_enlazados [$count_enlazado] [$count_enlaces] .'";

                                                                                       
                                                                                              </script>';
                                                                                                          print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$results['ID']."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3]);'><td>".$results['ID']."</td>";
                                                                                                          print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$descripcion."</td><td>".$general_familia."</td><td>".$id_enlazados [$count_enlazado] [$count_enlaces] ."</td></tr>";

                                                                                                           $count++;
                                                                                                           $count_enlaces++;
                                                                                                    
                                                                                                      }     // Termina WHILE 2
                                                                                                    
                                                                               }      // Termina ELSE 4   

                                                       $count_enlazado++; 

                                                        }   // Termina ELSE 3


// --------------------------------------------------NOTA_CATEGORIA------------------------------------




                                                        $sql2="SELECT * FROM nota_categoria where id_nota = '".$id_nota."' ";
                                       if(!$result2 = $bd->query($sql2)){         // IF nro 3
                                       
                                        echo "Error Fetching Data";
                                        
                                       }          // Termina IF nro 3
                                                  else {                // ELSE nro 3
                                                                  if($result2->num_rows ==0){             // IF nro 4
                                                                    $general_categoria = "Si";      
                                                                    $id_enlazados=" ";

                                                                       $count++;
                                                                       
                                                                    }                         // Termina IF nro 4
           
                                                                   else{                  // ELSE nro 4
                                                                      while($results2 = $result2->fetch_assoc()){           // While nro 2
                                                                                      $general_categoria = "No";
                                                                                      $id_categoria=$results2['id_categoria'];

                                                                                       $sql3="SELECT * FROM categorias where ID = '".$id_categoria."' ";
                                                                                                                             if(!$result3 = $bd->query($sql3)){ }
                                                                                                                              else{
                                                                                                                                   while($results4 = $result3->fetch_assoc()){   
                                                                                                                                     $id_enlazados [$count_enlazado] [$count_enlaces] =$results4['nombre_categoria'];
                                                                                                                                   }}                                       



                                                                                       echo '<script>
                                                                                              var tempArr'.$count.' = new Array();
         asdasd                                                                                        tempArr'.$count.'[0]= "'.$results['descripcion_nota'].'";
                                                                                             
                                                                                                
                                                                                                  tempArr'.$count.'[1]= "'.$id_nota.'";
                                                                                                  tempArr'.$count.'[2]= "'.$general_categoria.'";
                                                                                                  tempArr'.$count.'[3]= "'.$id_enlazados [$count_enlazado] [$count_enlaces] .'";

                                                                                       
                                                                                              </script>';
                                                                                                          print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$results['ID']."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3]);'><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['ID']."</td>";
                                                                                                          print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$descripcion."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$general_categoria."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$id_enlazados [$count_enlazado] [$count_enlaces] ."</td></tr>";

                                                                                                           $count++;
                                                                                                           $count_enlaces++;
                                                                                                    
                                                                                                      }     // Termina WHILE 2
                                                                                                    
                                                                               }      // Termina ELSE 4   

                                                       $count_enlazado++; 

                                                        }   // Termina ELSE 3


if($general_familia=="Si" && $general_categoria=="Si"){

echo '<script>
                                                            var tempArr'.$count.' = new Array();
                                                               tempArr'.$count.'[0]= "'.$descripcion.'";
                                                           
                                                              
                                                                tempArr'.$count.'[1]= "'.$id_nota.'";
                                                                tempArr'.$count.'[2]= "'.$general_categoria.'";
                                                                tempArr'.$count.'[3]= "'.$id_enlazados.'";

                                                     
                                                            </script>';
                                                                        print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$id_nota."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3]);'><td>".$id_nota."</td>";
                                                                        print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$descripcion."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$general_categoria."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'></td></tr>";

                                                                      
}







                         } // Termina WHILE 1

      }     // Termina ELSE 2

     // Termina ELSE 1

}

                ?>


                </tr>
            </table>
            </div>

<script type="text/javascript">

function esconderlistado(){
  if(document.getElementById('idtabla').className=='pure-table'){
    document.getElementById('idtabla').className = 'hidden pure-table';
  }
  else{
        document.getElementById('idtabla').className = 'pure-table';
      }

}


$(document).ready(function()
{



  function registrarModal(){

      document.getElementById('btnEliminar').style.display = 'none';
        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Registrar";
        document.getElementById('iddescripcion').value="";
    
        $('#myModal').modal('show');


      
    }

    function ModificarModal(){
      
              
        document.getElementById('btnEliminar').style.display = 'inline-block';

        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Modificar";
        document.getElementById('iddescripcion').value="";
       
        //document.getElementById('idnota').value=id_categoria;


        $('#myModal').modal('show');
      
    }

    function Eliminar()
  {



var r = confirm("Esta seguro de eliminar los datos?");
if (r == true) {
   document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Eliminar";


        document.getElementById("myForm").submit();

} else {
  
}



}

   
            

  });


</script>
