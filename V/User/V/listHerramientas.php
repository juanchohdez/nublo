        <div id="item1_menu" name="item_menu" class="animated fadeInLeft email-item email-item-unread email-item-selected pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="40" width="40" src="img/icons_colour/text-lines.png">
            </div>

            <div class="pure-u-3-4">
                <span> <h4 class="email-title">Seleccionar Idioma</h4></span>
                <p class="email-desc">

                </p>
            </div>
        </div>

                <div id="item2_menu" name="item_menu" class="animated fadeInLeft email-item email-item-unread email-item-selected pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="64" width="64" src="img/icons_colour/shopping-store.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Configuración de Pantalla</h4>
                <p class="email-desc"> Cambiar estilo de pantallas.
                </p>
            </div>
        </div>

          <div id="item3_menu" name="item_menu" class="animated fadeInLeft email-item email-item-unread email-item-selected pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="64" width="64" src="img/icons_colour/office-material-1.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Planos de Mesas</h4>
                <p class="email-desc">
                    Crear y modificar planos del restaurant.
                </p>
            </div>
        </div>


         <div id="item4_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Exportar Lista de Precios</h4>
                        <p class="email-desc">
                        
                        </p>
                    </div>
                </div>
        
         <div id="item5_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                    <div class="pure-u">
                        <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                    </div>
        
                    <div class="pure-u-3-4">
                        <h4 class="email-title">Importar Lista de Precios</h4>
                        <p class="email-desc">
                        </p>
                    </div>
                </div>
        
        
           <div id="item6_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                        <div class="pure-u">
                            <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                        </div>
            
                        <div class="pure-u-3-4">
                            <h4 class="email-title">Eliminar Ticket y/o Movimiento de Caja</h4>
                            <p class="email-desc">
                            </p>
                        </div>
                    </div>
            
             <div id="item7_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                        <div class="pure-u">
                            <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                        </div>
            
                        <div class="pure-u-3-4">
                            <h4 class="email-title">Respaldar Nueva Copia de Seguridad</h4>
                            <p class="email-desc">
                                
                            </p>
                        </div>
                    </div>
            
             <div id="item8_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
                        <div class="pure-u">
                            <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
                        </div>
            
                        <div class="pure-u-3-4">
                            <h4 class="email-title">Restaurar Copia de Seguridad Anterior</h4>
                            <p class="email-desc">
                            </p>
                        </div>
                    </div>
            
                
                       
                  
            
  <script type="text/javascript">
           
$(document).ready(function()
{
$("#item1_menu").click(function(){
        $.post("V/email2.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});
});




$(document).ready(function()
{
$("#item2_menu").on("click", function(){
  $.post("V/email.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});
});



        </script>