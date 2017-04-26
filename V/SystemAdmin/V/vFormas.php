
<div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Formas de Pago</h1>
                    <p class="email-content-subtitle">
                         Para crear una nueva Forma de Pago presione el botón "Nuevo+", para consultar ó modificar una Forma de Pago existente haga Click en la opción del listado que desee revisar. 
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button onclick="registrarModal();" type="button" data-toggle="modal" data-target="#myModal" id="nuevo" class="btn btn-default ">Nuevo+</button>
  </div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST" name="formformas" class="pure-form pure-form-stacked" action="C/cForma.php" id="myForm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Formas de Pago</label>
      </div>
      <div class="modal-body">
        
   <div class="pure-u-1-2">
                <label>Nombre: </label>
                </div>
                   <div class="pure-u-1-2">

                <input id="idnombre" name="nombre" type="text" required autocomplete="off" maxlength="25" />
                <input id="idforma" name="idforma" type="hidden" value="NULL"  />
                <input id="idaccion" name="accion" type="hidden" value=""  />
                </div>

          
   
   <br><br>
   <div class="pure-g">
<table class="pure-table pure-table-bordered">
      <tr>
        <td>
          <div class="pure-u-1"><label for="cambio"><input type="checkbox" id="cambio">&nbsp;&nbsp;Devolver Cambio</label>Marque esta opción si desea que al usar esta forma de pago se devuelva cambio</div>
        </td>
        <td>
          <div class="pure-u-1"><label for="cajon"><input type="checkbox" id="cajon">&nbsp;&nbsp;Abrir Cajón</label>Marque esta opción para que el cajón se abra automaticamente al usar esta forma de pago</div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="pure-u-1"><label for="propina"><input type="checkbox" id="propina">&nbsp;&nbsp;Registrar Propina</label>Marque esta opción si desea que la propina recibida quede registrada en el TPV</div>
        </td>
        <td>
          <div class="pure-u-1"><label for="superar"><input type="checkbox" id="superar">&nbsp;&nbsp;Permitir superar el total</label>Marque esta opción si desea que con esta forma de pago se pueda pagar una cantidad mayor al importe total del ticket</div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="pure-u-1"><label for="arqueo"><input type="checkbox" id="arqueo">&nbsp;&nbsp;Incluir en el arqueo de caja</label>Marque esta opción para que el total recibido mediante esta forma de pago se incluya en el arqueo de caja</div>
        </td>
        <td>
          <div class="pure-u-1"><label for="info"><input type="checkbox" id="info">&nbsp;&nbsp;Permitir añadir información adicional</label>Marque esta opción para permitir agregar alguna nota adicional a la forma de pago</div>
        </td>
      </tr>

</table>

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
            <p><h4>Lista de Formas de Pago</h4></p>
                <table class="table table-bordered   table-hover">
                        <tr class="success">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Devolver cambio</th>
                            <th>Abrir cajón</th>
                            <th>Registrar propina</th>
                            <th>Superar el total del importe</th>
                            <th>Incluido en arqueo de caja</th>
                            <th>Añadir información adicional</th>
                        </tr>

                <?php 
                include("../../../M/mBD.php");

                $sql="SELECT * FROM formas_pago";
              if(!$result = $bd->query($sql)){
                echo "Sin resultados.";
              }
              else{ 

                $count=0;
                while($results = $result->fetch_assoc()){
                $nombre=$results['nombre_forma_pago'];
            $id_forma=$results['ID'];

 echo '<script>
        var tempArr'.$count.' = new Array();
           tempArr'.$count.'[0]= "'.$results['nombre_forma_pago'].'";
       
            tempArr'.$count.'[1]= "'.$results['devolver_cambio'].'";
       
            tempArr'.$count.'[2]= "'.$results['abrir_cajon'].'";

            tempArr'.$count.'[3]= "'.$results['registrar_propina'].'";
            tempArr'.$count.'[4]= "'.$results['superar_total'].'";
            tempArr'.$count.'[5]= "'.$results['incluir_en_arqueo'].'";
            tempArr'.$count.'[6]= "'.$results['anadir_info_adicional'].'";

            tempArr'.$count.'[7]= "'.$id_forma.'";

 
        </script>';
                    print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$results['ID']."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3], tempArr".$count."[4], tempArr".$count."[5], tempArr".$count."[6], tempArr".$count."[7]);'><td>".$results['ID']."</td>";
                    print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$nombre."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['devolver_cambio']."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['abrir_cajon']."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['registrar_propina']."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['superar_total']."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['incluir_en_arqueo']."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['anadir_info_adicional']."</td></tr>";

                     $count++;
              
                }
                
              }


                ?>


                </tr>
            </table>
            </div>

<script type="text/javascript">


$(document).ready(function()
{



  function registrarModal(){

      document.getElementById('btnEliminar').style.display = 'none';
        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Registrar";
        document.getElementById('idnombre').value="";
        document.getElementById('idcolor').value="";
       // document.getElementById('idimagen').value="";
        document.getElementById('idtexto').value="";
        document.getElementById('idforma').value="NULL";
        $("#marcoVistaPrevia").html(' ');
           $("#marcoVistaPrevia").css('border-color', 'black');
  $("#marcoVistaPrevia").css('border-width', '10px');
  $("#marcoVistaPrevia").css('color', 'black');
  $("#marcoVistaPrevia").css('font-size', 'smaller');


        $('#myModal').modal('show');


      
    }

    function ModificarModal(nombre_forma,color_forma,imagen_forma,texto_forma,id_forma){
      
              
            document.getElementById('btnEliminar').style.display = 'inline-block';

        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Modificar";
        document.getElementById('idnombre').value="";
        document.getElementById('idcolor').value="";
        //document.getElementById('idimagen').value="";
        document.getElementById('idtexto').value="";
        document.getElementById('idforma').value="";
        document.getElementById('idnombre').value=nombre_forma;
        document.getElementById('idcolor').value=color_forma;
        document.getElementById('idtexto').value=texto_forma;
          $("#marcoVistaPrevia").html(texto_forma);
           $("#marcoVistaPrevia").css('border-color', color_forma);
  $("#marcoVistaPrevia").css('border-width', '10px');
  $("#marcoVistaPrevia").css('color', 'black');
  $("#marcoVistaPrevia").css('font-size', 'smaller');

       // document.getElementById('idimagen').value=imagen_forma;
        document.getElementById('idforma').value=id_forma;


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
