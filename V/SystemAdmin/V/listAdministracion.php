        <div id="item1_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="40" width="40" src="img/icons_colour/network.png">
            </div>

            <div class="pure-u-3-4">
                <span> <h4 class="email-title">Empresa</h4></span>
                <p class="email-desc">
                    Modificar datos de la Empresa.
                </p>
            </div>
        </div>

                <div id="item2_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="80" width="80" src="img/icons_colour/ringing.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Impuestos</h4>
                <p class="email-desc">
                    Modificar Impuestos.
                </p>
            </div>
        </div>

          <div id="item3_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="64" width="64" src="img/icons_colour/id-card.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Parametros de Cierre diario</h4>
                <p class="email-desc">
                    Controlar parametros para el cierre diario de caja.
                </p>
            </div>
        </div>

         <div id="item4_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Plantilla de Ticket</h4>
                        <p class="email-desc">
                            Crear y cambiar plantillas de tickets
                        </p>
                    </div>
                </div>
        
        
         <div id="item5_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Notas de Preparación</h4>
                        <p class="email-desc">
                            Crear y modificar notas de preparación.
                        </p>
                    </div>
                </div>
        
        
         <div id="item6_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Formas de Pago</h4>
                        <p class="email-desc">
                            Registrar y Modificar formas de pago.
                        </p>
                    </div>
                </div>
        
        
            
         <div id="item7_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Clientes</h4>
                        <p class="email-desc">
                            Registrar, Visualizar y Modificar datos de Clientes.
                        </p>
                    </div>
                </div>
        

         <div id="item8_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Cuentas Clientes</h4>
                        <p class="email-desc">
                            Gestionar cuentas de clientes.
                        </p>
                    </div>
                </div>
        
        
        <div id="item9_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                        <div class="pure-u">
                            <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                        </div>
            
                        <div class="pure-u-3-4">
                            <h4 class="email-title">Puntos de Venta</h4>
                            <p class="email-desc">
                                Controlar los puntos de venta.
                            </p>
                        </div>
                    </div>
            
            
           <div id="item10_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                                 <div class="pure-u">
                                     <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                                 </div>
                     
                                 <div class="pure-u-3-4">
                                     <h4 class="email-title">Centros de Venta</h4>
                                     <p class="email-desc">
                                         Controlar los centros de venta.
                                     </p>
                                 </div>
                             </div>
                     
      
  <script type="text/javascript">
      
$(document).ready(function()
{

$("#item1_menu").click(function(){
        $.post("V/vEmpresa.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item2_menu").click(function(){
        $.post("V/vImpuestos.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});


$("#item3_menu").click(function(){
        $.post("", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item4_menu").click(function(){
        $.post("", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item5_menu").click(function(){
        $.post("V/vNotas.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item6_menu").click(function(){
        $.post("V/vFormas.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item7_menu").click(function(){
        $.post("", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item8_menu").click(function(){
        $.post("", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item9_menu").click(function(){
        $.post("", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item10_menu").click(function(){
        $.post("", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

});


        </script>