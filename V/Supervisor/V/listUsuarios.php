        <div id="item1_menu" name="item_menu" class="email-item email-item-unread email-item-selected " onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="40" width="40" src="img/icons_colour/text-lines.png">
            </div>

            <div class="pure-u-3-4">
                <span> <h4 class="email-title">Usuarios</h4></span>
                <p class="email-desc">
                          Gestionar usuarios.

                </p>
            </div>
        </div>

                <div id="item2_menu" name="item_menu" class="email-item email-item-unread email-item-selected " onclick="cambiar_menu(this.id);">
            <div class="pure-u">
                <img class="email-avatar" height="64" width="64" src="img/icons_colour/shopping-store.png">
            </div>

            <div class="pure-u-3-4">
                <h4 class="email-title">Perfiles de Usuarios</h4>
                <p class="email-desc"> Asignar ó Cambiar el Perfil a un Usuario
                </p>
            </div>
        </div>

         
  <script type="text/javascript">
           

$("#item1_menu").click(function(){
        $.post("V/vUsuarios.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});

$("#item2_menu").click(function(){
        $.post("V/a.php", function(htmlexterno){
   $("#email-content").html(htmlexterno);
        });
});


        </script>