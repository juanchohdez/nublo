<?php
session_start();
if (empty($_SESSION['usertype'])) {
  print("<h2>Error - wrong way! <a href='../../'>GET OUT</a></h2>");
}
else

if($_SESSION['usertype']=='1'){
   
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPVNublo - Menú</title>
<!--[if lte IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
<!--<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
<!--<![endif]-->

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

      <script type="text/javascript"  src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript">

    function objetoAjax(){
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
 
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false; }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
          xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }
    </script>
    
    <link rel="icon" type="image/png" href="logo.ico">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style type="text/css">
    .pure-g {
    letter-spacing: 0em !important;
}
 .boton_teclado{
    position:absolute;
    bottom:50px;
    left:0px;
}

#marcoVistaPrevia{
            border: 1px solid #DDD;
            width: 100px;
            height: 100px;
            float: center;
            text-align: center;

        }


        #vistaPrevia{
            max-width: 100px;
            max-height: 100px;          
        }
</style>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/email-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/email.css">
        <link rel="stylesheet" href="css/layouts/animate.css">
    <!--<![endif]-->
<script type="text/javascript">

function cerrar_sesion(){
var r = confirm("Esta seguro que desea cerrar sesión?");
if (r == true) {
    window.location.href="../../";
} else {
  
}




};
   



$(document).ready(function()
{
    /*
var check_session = "<? echo $_SESSION['pagina'] ?>"; 

if(check_session == "undefined") {

     



}

else{

var linkList = "<? echo $_SESSION['reloadedlist'] ?>"; 
var linkList = "V/"+linkList;
 $.post(linkList, function(htmlexterno){
   $("#list").html(htmlexterno);
   
});

var linkPagina = "<? echo $_SESSION['pagina'] ?>"; 
var linkPagina = "V/"+linkList;
  $.post(linkPagina, function(htmlexterno){
   $("#email-content").html(htmlexterno);
   
});

   }
*/
$.post("V/listArticulos.php", function(htmlexterno){
   $("#list").html(htmlexterno);
     var i = 1;
    for(i=1;i<5;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
$("#articulos").click(function(){
        $.post("V/listArticulos.php", function(htmlexterno){
   $("#list").html(htmlexterno);
   var i = 1;
    for(i=1;i<5;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
});


$("#administracion").click(function(){
        $.post("V/listAdministracion.php", function(htmlexterno){
   $("#list").html(htmlexterno);
   var i = 1;
    for(i=1;i<4;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
});


$("#herramientas").click(function(){
        $.post("V/listHerramientas.php", function(htmlexterno){
   $("#list").html(htmlexterno);
   var i = 1;
    for(i=1;i<4;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
});



$("#informes").click(function(){
        $.post("V/listInformes.php", function(htmlexterno){
   $("#list").html(htmlexterno);
   var i = 1;
    for(i=1;i<4;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
});



$("#usuarios").click(function(){
        $.post("V/listUsuarios.php", function(htmlexterno){
   $("#list").html(htmlexterno);
   var i = 1;
    for(i=1;i<4;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
});


$("#ayuda").click(function(){
        $.post("V/listAyuda.php", function(htmlexterno){
   $("#list").html(htmlexterno);
   var i = 1;
    for(i=1;i<4;i++){
    document.getElementById("item"+i+"_menu").className ="animated fadeInLeft email-item pure-g";
}
        });
});



});


        </script>
</head>
<body>
<div id="layout" class="content pure-g">
    <div id="nav" class="pure-u">
  
        <a href="#" class="nav-menu-button">Menu</a>
<input type="hidden" id="pagina" value="vFamilias.php" />
<input type="hidden" id="reloadedlist" value="listArticulos.php" />
        <div class="nav-inner ">
         <img src="logo.png" width="25%"><br>
        <font color="white"> Bienvenido <i>Admin</i></font>
            <a class="pure-button" onclick="cerrar_sesion();">Cerrar sesión</a>

            <div class="pure-menu ">
                <ul class="pure-menu-list ">

                    <li class="pure-menu-item"><a id="articulos" href="#" class="pure-menu-link" ><img src="img/icons_colour/packing-2.png" width="25%">&nbsp;&nbsp;Articulos <span class="email-count"></span></a></li>

                    <li class="pure-menu-item"><a id="administracion" href="#" class="pure-menu-link" ><img src="img/icons_colour/studying-1.png" width="25%">&nbsp;&nbsp; Administración<span class="email-count"></span></a></li>

                     <li class="pure-menu-item"><a id="herramientas" href="#" class="pure-menu-link"><img src="img/icons_colour/line-graph.png" width="25%">&nbsp;&nbsp;Herramientas <span class="email-count"></span></a></li>

                     <li class="pure-menu-item"><a href="#" id="informes" class="pure-menu-link"><img src="img/icons_colour/office-material-3.png" width="25%">&nbsp;&nbsp;Informes <span class="email-count"></span></a></li>

                     <li class="pure-menu-item"><a href="#" id="usuarios" class="pure-menu-link"><img src="img/icons_colour/customer-service.png" width="25%">&nbsp;&nbsp;Usuarios <span class="email-count"></span></a></li>

                     <li class="pure-menu-item"><a href="#" id="ayuda" class="pure-menu-link"><img src="img/icons_colour/customer-service-1.png" width="25%">&nbsp;&nbsp;Ayuda <span class="email-count"></span></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="boton_teclado_div">
        <button class="boton_teclado">Activar teclado en Pantalla</button>

    </div>
    </div>

    <div id="list" class="pure-u-1">
       <img src="ajaxloader.gif" align="right">
    </div>

    <div id="main" class="pure-u-1">
        <div id="email-content" class="email-content">
           <h3>Seleccione un submenú</h3>
        </div>

    </div>
</div>

<script src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>

<script>
    YUI().use('node-base', 'node-event-delegate', function (Y) {

        var menuButton = Y.one('.nav-menu-button'),
            nav        = Y.one('#nav');

        // Setting the active class name expands the menu vertically on small screens.
        menuButton.on('click', function (e) {
            nav.toggleClass('active');
        });

        // Your application code goes here...

    });
</script>
<script>
   function cambiar_menu(num_menu){

  



    var elementos = document.getElementsByName("item_menu");
 
 
  for (x=1;x<elementos.length+1;x++){
   	document.getElementById("item"+x+"_menu").className ="email-item pure-g";
 }

    document.getElementById(num_menu).className ="email-item email-item-unread email-item-selected pure-g";


}

  



</script>

</body>
</html>
<?php } 

else{

print("<h2>Error - wrong way! <a href='../../'>GET OUT</a></h2>");
}

?>