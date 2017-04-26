
<div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Impuestos</h1>
                    <p class="email-content-subtitle">
                         Para crear un Impuesto presione el botón "Nuevo+", para consultar ó modificar algún Impuesto existente haga Click en la opción del listado que desee revisar. 
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button onclick="registrarModal();" type="button" data-toggle="modal" data-target=".bs-example-modal-lg" id="nuevo" class="btn btn-default ">Nuevo+</button>
  </div>



<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <form method="POST" name="formImpuestos"  class="pure-form" action="C/cImpuesto.php" id="myForm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Impuestos</h4>
      </div>
      <div class="modal-body">
          

              Nombre:
                <input id="idnombre" name="nombre" type="text" required autocomplete="off" maxlength="25" />
               

                <input id="idimpuesto" name="idimpuesto" type="hidden" value="NULL"  />
                <input id="idaccion" name="accion" type="hidden" value=""  />

          

                
                <label for="vp1"> <!--<input type="radio" name="vp" id="vp1" checked="checked" >--></label>
         &nbsp;          Valor: 
                   <div class="pure-u-1-8">
                <input id="idvalor" name="valor" class="pure-input-1" type="number" pattern="[0-9]*" max="100" min="0" maxlength="3" required autocomplete="off" /> 
                </div>%
              
             &nbsp;      Recargo: 
                   <div class="pure-u-1-8">
                <input id="idrecargo" name="recargo" class="pure-input-1"  type="number" max="100" min="0"  pattern="[0-9]*" maxlength="3" required autocomplete="off" /> 
                </div>%
&nbsp;&nbsp;
                   Habilitado: 
                                      <div class="pure-u-1-8">

                <select id="idhabilitado" class="pure-input-3-4" name="habilitado" id="habilitado" >
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
               </div>
            <!--   <div id="botonera" class="pure-u-1-1"> 
                  <label for="vp2">  <input type="radio" name="vp" id="vp2"> Imagen: </label><input id="idimagen" name="imagen" type="file" accept="image/jpg" required autocomplete="off" />
                </div>-->
               

  

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
            <p><h4>Lista de Impuestos</h4></p>
                <table class="table table-bordered   table-hover">
                        <tr class="success">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th>Recargo</th>
                            <th>Habilitado</th>
                        </tr>

                <?php 
                include("../../../M/mBD.php");

                $sql="SELECT * FROM impuestos";
                  if(!$result = $bd->query($sql)){
                echo "Sin resultados.";
              }
              else{ 

                $count=0;
                while($results = $result->fetch_assoc()){
                $nombre=$results['nombre_impuesto'];
            $id_Impuesto=$results['ID'];

 echo '<script>
        var tempArr'.$count.' = new Array();
           tempArr'.$count.'[0]= "'.$results['nombre_impuesto'].'";
       
            tempArr'.$count.'[1]= "'.$results['valor_impuesto'].'";
       
            tempArr'.$count.'[2]= "'.$results['recargo_impuesto'].'";

            tempArr'.$count.'[3]= "'.$results['habilitado'].'";

            tempArr'.$count.'[4]= "'.$id_Impuesto.'";

 
        </script>';
                    print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$results['ID']."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3], tempArr".$count."[4]);'><td>".$results['ID']."</td>";
                    print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$nombre."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['valor_impuesto']."%</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['recargo_impuesto']."%</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['habilitado']."</tr>";

                     $count++;
              
                }
}

                ?>


                </tr>
            </table>
            </div>

<script type="text/javascript">

  var id;


$(document).ready(function()
{

$("#nuevo").click(function(){
        $.post("V/formImpuestos.php", function(htmlexterno){
   $("#email-content-body").html(htmlexterno);
        });
});    });


  function registrarModal(){

      document.getElementById('btnEliminar').style.display = 'none';
        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Registrar";
        document.getElementById('idnombre').value="";
        document.getElementById('idvalor').value="";
        document.getElementById('idrecargo').value="";
        document.getElementById('idimpuesto').value="NULL";
        document.getElementById('idhabilitado').selectedIndex="Si";
       


        $('#myModal').modal('show');


      
    }

    function ModificarModal(nombre_impuesto,valor_impuesto,recargo_impuesto,habilitado,idimpuesto){
      
              
            document.getElementById('btnEliminar').style.display = 'inline-block';

        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Modificar";
        document.getElementById('idnombre').value="";
        document.getElementById('idvalor').value="";
        document.getElementById('idrecargo').value="";
        document.getElementById('idimpuesto').value="";
        document.getElementById('idnombre').value=nombre_impuesto;
        document.getElementById('idvalor').value=valor_impuesto;
        document.getElementById('idrecargo').value=recargo_impuesto;
        if(habilitado=='Si')
        document.getElementById('idhabilitado').selectedIndex='0';

      else
        document.getElementById('idhabilitado').selectedIndex='1';

         

       // document.getElementById('idimagen').value=imagen_Impuesto;
        document.getElementById('idimpuesto').value=idimpuesto;


        $('#myModal').modal('show');
      
    }

    function Eliminar(id)
  {



var r = confirm("Esta seguro de eliminar los datos?");
if (r == true) {
   document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Eliminar";


        document.getElementById("myForm").submit();

} else {
  
}





   
            

  }


</script>
