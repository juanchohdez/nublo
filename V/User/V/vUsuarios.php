
<div class="email-content-header pure-g">
                <div class="pure-u-1-2">
                    <h1 class="email-content-title">Usuarios</h1>
                    <p class="email-content-subtitle">
                         Para crear un nuevo Usuario presione el botón "Nuevo+", para consultar ó modificar un Usuario existente haga Click en la opción del listado que desee revisar. 
                    </p>
                </div>

                <div class="email-content-controls pure-u-1-2">
                    <button onclick="registrarModal();" type="button" data-toggle="modal" data-target="#myModal" id="nuevo" class="btn btn-default ">Nuevo+</button>
  </div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form method="POST" name="formUsuarios" action="C/cUsuario.php" id="myForm">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Usuarios</h4>
      </div>
      <div class="modal-body">
        
   <div class="pure-u-1-2">
                <label>Usuario: </label>
                </div>
                   <div class="pure-u-1-2">

                <input id="idnombre" name="nombre" type="text" required autocomplete="off" maxlength="25" />
                <input id="idUsuario" name="idUsuario" type="hidden" value="NULL"  />
                <input id="idaccion" name="accion" type="hidden" value=""  />
                </div>
      <br>
   <div class="pure-u-1-2">
                <label>Contraseña: </label>
                </div>
                   <div class="pure-u-1-2">

                <input id="idpass" name="pass" type="password" required autocomplete="off" maxlength="25" />
              
                </div>

          <div class="pure-u-1-2">
                <label>Perfil de Usuario: </label>
                </div>
                   <div class="pure-u-1-2">

                <select name="perfil" id="idusertype" required>
                  <option value="">Seleccione..</option>
                  <option value="2">Administrador</option>
                  <option value="3">Supervisor</option>
                  <option value="4">Usuario</option>
                </select>
              
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
            <p><h4>Lista de Usuarios</h4></p>
                <table class="table table-bordered   table-hover">
                        <tr class="success">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Perfil de Usuario</th>
                            
                        </tr>

                <?php 
                include("../../../M/mBD.php");


                   $sql="SELECT * FROM users";
          if(!$result = $bd->query($sql)){
                echo "Sin resultados.";
              }
              else{ 
                $count=0;
                while($results = $result->fetch_assoc()){
                $nombre=$results['user'];
            $id_Usuario=$results['id'];

            $tipo_usuario=$results['usertype'];
            if($tipo_usuario==1){

            }
else{
            if($tipo_usuario==2){
              $usertype="Administrador";

            }
            elseif($tipo_usuario==3){
              $usertype="Supervisor";
            }
            elseif($tipo_usuario==4){
              $usertype="Usuario";
            }

 echo '<script>
        var tempArr'.$count.' = new Array();
           tempArr'.$count.'[0]= "'.$results['user'].'";
       
            tempArr'.$count.'[1]= "'.$results['password'].'";
       
            tempArr'.$count.'[2]= "'.$results['usertype'].'";

            tempArr'.$count.'[3]= "'.$results['id'].'";

          

 
        </script>';
                    print "<tr data-toggle='modal' data-target='#myModal' style='cursor: pointer' id='".$results['id']."' onclick='ModificarModal( tempArr".$count."[0], tempArr".$count."[1], tempArr".$count."[2], tempArr".$count."[3]);'><td>".$results['id']."</td>";
                    print "<td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$nombre."</td><td data-toggle='tooltip' data-placement='bottom' title='Click para Modificar'>".$usertype."</td></tr>";

                     $count++;
              
                }}

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
        $.post("V/formUsuarios.php", function(htmlexterno){
   $("#email-content-body").html(htmlexterno);
        });
});    });


  function registrarModal(){

      document.getElementById('btnEliminar').style.display = 'none';
        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Registrar";
        document.getElementById('idnombre').value="";
        document.getElementById('idpass').value="";
        document.getElementById('idusertype').selectedIndex='0';
           document.getElementById('idUsuario').value="NULL";



        $('#myModal').modal('show');


      
    }

    function ModificarModal(user,pass,usertype,id_usuario){
      
              
            document.getElementById('btnEliminar').style.display = 'inline-block';

        document.getElementById('idaccion').value="";
        document.getElementById('idaccion').value="Modificar";
        document.getElementById('idnombre').value="";
        document.getElementById('idpass').value="";
        document.getElementById('idUsuario').value="";
    
        document.getElementById('idUsuario').value=id_usuario;
        document.getElementById('idnombre').value=user;
        document.getElementById('idpass').value=pass;
  
   if(usertype=='2')
        document.getElementById('idusertype').selectedIndex='1';

      else if(usertype=='3')
        document.getElementById('idusertype').selectedIndex='2';

      else if(usertype=='4')
        document.getElementById('idusertype').selectedIndex='3';

         

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
