        <div id="item1_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="40" width="40" src="img/icons_colour/packing.png">
            </div>

            <div class="pure-u-3-4">
                <span> <h4 class="email-title">Familias</h4></span>
                <p class="email-desc">
                    Registrar, Visualizar y Modificar Familias.
                </p>
            </div>
        </div>

                <div id="item2_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="64" width="64" src="img/icons_colour/packing-2.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Categorías</h4>
                <p class="email-desc">
                    Registrar, Visualizar y Modificar Categorías de Articulos.
                </p>
            </div>
        </div>

          <div id="item3_menu" name="item_menu" class="animated fadeInLeft email-item pure-g" onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="64" width="64" src="img/icons_colour/offices.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Productos</h4>
                <p class="email-desc">
                    Visualizar y Modificar Productos.
                </p>
            </div>
        </div>
         
  <script type="text/javascript">
           
$(document).ready(function()
{

$("#item1_menu").click(function(){
        $.post("V/vFamilias.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item2_menu").click(function(){
        $.post("V/vCategorias.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});


$("#item3_menu").click(function(){
        $.post("V/vProductos.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

});

        </script>