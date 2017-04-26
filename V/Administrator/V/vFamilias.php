
<div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Familias</h1>
                    <p class="email-content-subtitle">
                         Para crear una nueva Familia presione el botón "Nuevo+", para consultar ó modificar una Familia existente haga Click en la opción del listado que desee revisar. 
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button onclick="registrarModal();" type="button" data-toggle="modal" data-target="#myModal" id="nuevo" class="btn btn-default ">Nuevo+</button>
  </div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST" name="formFamilias" action="C/cFamilia.php" id="myForm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Familias</h4>
      </div>
      <div class="modal-body">
        
   <div class="pure-u-1-2">
                <label>Nombre: </label>
                </div>
                   <div class="pure-u-1-2">

                <input id="idnombre" name="nombre" type="text" required autocomplete="off" maxlength="25" />
                <input id="idfamilia" name="idfamilia" type="hidden" value="NULL"  />
                <input id="idaccion" name="accion" type="hidden" value=""  />
                </div>

          
   <div class="pure-u-1-2">
   <br><br>
                <label><p>Aspecto: </p></label>
                  </div>
                   <br>

                <label for="vp1"> <!--<input type="radio" name="vp" id="vp1" checked="checked" >-->
                   <div class="pure-u-1-1">
                   Texto: </label>
                <input id="idtexto" onkeyup="asignartexto();" name="texto" type="text" maxlength="25" required autocomplete="off" />
                </div>

                 <div class="pure-u-3-3">
                 <br>
                   Color:
                <input id="idcolor" onchange="cambiarcolor();"  name="color" type="color" required autocomplete="off" />
                </div>
               
            <!--   <div id="botonera" class="pure-u-1-1"> 
                  <label for="vp2">  <input type="radio" name="vp" id="vp2"> Imagen: </label><input id="idimagen" name="imagen" type="file" accept="image/jpg" required autocomplete="off" />
                </div>-->
                <br>
                <br>
                <div id="marcoVistaPrevia" >
            <img id="vistaPrevia" src="" alt="" />

        </div>

        <div id="informacion"></div>

     

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
            <p><h4>Lista de Familias</h4></p>
                <table class="table table-bordered   table-hover">
                        <tr class="success">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Texto</th>
                            <th>Color</th>
                            <th>Imagen</th>
                        </tr>

                <?php 
                include("../../../M/mBD.php");


                   $sql="SELECT * FROM familias";
          if(!$result = $bd->query($sql)){
                echo "Sin resultados.";
              }
              else{ 
                $count=0;
                while($results = $result->fetch_assoc()){
                $nombre=$results['nombre_familia'];
            $id_familia=$results['ID'];

 echo '<script>
        var tempArr'.$count.' = new Array();
           tempArr'.$count.'[0]= "'.$results['nombre_familia'].'";
       
            tempArr'.$count.'[1]= "'.$results['color_familia'].'";
       
            tempArr'.$count.'[2]= "'.$results['imagen_familia'].'";

            tempArr'.$count.'[3]= "'.$results['texto_familia'].'";

            tempArr'.$count.'[4]= "'.$id_familia.'";

 
        </script>';
                    print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$results['ID']."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3], tempArr".$count."[4]);'><td>".$results['ID']."</td>";
                    print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$nombre."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$results['texto_familia']."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'><input type='color' value='".$results['color_familia']."' readonly disabled /></td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'><img src='".$results['imagen_familia']."' width='50px'></tr>";

                     $count++;
              
                }

}
                ?>


                </tr>
            </table>
            </div>

<script type="text/javascript">

function asignartexto(){
  var valorInputTexto = document.getElementById('idtexto').value;

  $("#marcoVistaPrevia").html(valorInputTexto);
}

function cambiarcolor(){
  var valorInputColor = document.getElementById('idcolor').value;

  $("#marcoVistaPrevia").css('border-color', valorInputColor);
  $("#marcoVistaPrevia").css('border-width', '10px');
  $("#marcoVistaPrevia").css('color', 'black');
  $("#marcoVistaPrevia").css('font-size', 'smaller');
}



    var id;


$(document).ready(function()
{

$("#nuevo").click(function(){
        $.post("V/formFamilias.php", function(htmlexterno){
   $("#email-content-body").html(htmlexterno);
        });
});    });


  function registrarModal(){

      document.getElementById('btnEliminar').style.display = 'none';
        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Registrar";
        document.getElementById('idnombre').value="";
        document.getElementById('idcolor').value="";
       // document.getElementById('idimagen').value="";
        document.getElementById('idtexto').value="";
        document.getElementById('idfamilia').value="NULL";
        $("#marcoVistaPrevia").html(' ');
           $("#marcoVistaPrevia").css('border-color', 'black');
  $("#marcoVistaPrevia").css('border-width', '10px');
  $("#marcoVistaPrevia").css('color', 'black');
  $("#marcoVistaPrevia").css('font-size', 'smaller');


        $('#myModal').modal('show');


      
    }

    function ModificarModal(nombre_familia,color_familia,imagen_familia,texto_familia,id_familia){
      
              
            document.getElementById('btnEliminar').style.display = 'inline-block';

        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Modificar";
        document.getElementById('idnombre').value="";
        document.getElementById('idcolor').value="";
        //document.getElementById('idimagen').value="";
        document.getElementById('idtexto').value="";
        document.getElementById('idfamilia').value="";
        document.getElementById('idnombre').value=nombre_familia;
        document.getElementById('idcolor').value=color_familia;
        document.getElementById('idtexto').value=texto_familia;
          $("#marcoVistaPrevia").html(texto_familia);
           $("#marcoVistaPrevia").css('border-color', color_familia);
  $("#marcoVistaPrevia").css('border-width', '10px');
  $("#marcoVistaPrevia").css('color', 'black');
  $("#marcoVistaPrevia").css('font-size', 'smaller');

       // document.getElementById('idimagen').value=imagen_familia;
        document.getElementById('idfamilia').value=id_familia;


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
