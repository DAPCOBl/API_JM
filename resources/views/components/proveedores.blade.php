<section class="Plan__Grupal" style="margin-top: 100px !important;">
    <div class="Plan__Grupal__container container">
        <div class="Plan__Grupal__Text">
            <h2 class="subtitle serv fontNegr">NUESTROS PROVEEDORES</h2>
            <p class="textProvee">Estos proveedores son fundamentales para asegurar que el taller tenga acceso a los
                recursos necesarios para llevar a cabo las reparaciones y el mantenimiento de las motocicletas de
                manera eficiente. </p>

            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" style=" display: inline-block;
    background-color: #FF6A00;
    justify-self: center;
    color: #fff !important;
    border-radius: 32px;" href="#modal1">Ver proveedores </a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="modal-content">
                    <h3 class="fontNegr">Nuestros proveedores</h3>
                    <div id="list" style="display: inline-flex; padding-top: 10px;">
                        <li class="spac"><img src="CSS/IMG/Proveedores/Auteco_logo.svg.png"
                                onclick="llevarAuteco()"></li>
                        <li class="spac"><img src="CSS/IMG/Proveedores/honda.png" onclick="llevarHonda()"></li>
                        <li><img src="CSS/IMG/Proveedores/BAJAB.png" onclick="llevarBajab()"></li>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">x</a>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var elems = document.querySelectorAll('.modal');
                    var instances = M.Modal.init(elems, {}); // Initialize modals with no options
                });
            </script>
        </div>

        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var elems = document.querySelectorAll('.modal');
                var instances = M.Modal.init(elems, options);
            });

            // Or with jQuery

            $(document).ready(function () {
                $('.modal').modal();
            });



            instance.close();

            instance.destroy();


            function llevarAuteco() {
                location.href = "https://www.auteco.com.co/";
            }

            function llevarHonda() {
                location.href = "https://motos.honda.com.co";
            }

            function llevarBajab() {
                location.href = "https://colombia.globalbajaj.com/";
            }

            function verList() {
                {
                    document.getElementById('Plan__Grupalcta').style.display = "none";
                    document.getElementById('list').style.display = "block";
                }
            }
        </script>



        <figure class="Plan__Grupal__picture">
            <img src="CSS/IMG/ClaseGrupal.webp" class="Plan__Grupal__img">
        </figure>
    </div>
</section>