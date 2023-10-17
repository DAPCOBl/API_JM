<section>
    <div class="prod">
        <h1>NUESTROS PRODUCTOS</h1>
        <div class="catalogo">
            <div class="filtro">
                <div class="filtrar">
                    <h2>FILTRAR POR</h2>
                </div>
                <div class="Marca">
                    <h4>Marca<br>
                        <div class="checkon">
                            <input type="checkbox" id="Yamaha" onclick="filtrar()" value="Yamaha" />
                            <label for="Yamaha">Yamaha</label><br>
                        </div>
                        <div class="checkon">
                            <input type="checkbox" class="check" id="Honda" value="Honda" />
                            <label for="Honda">Honda</label><br>
                        </div>
                        <div class="checkon">
                            <input type="checkbox" id="Apache" value="Apache" />
                            <label for="Apache">Apache</label><br>
                        </div>
                    </h4>
                </div>

                <div class="Categoria">
                    <h4>Categoria<br>
                        <div class="checkon">
                            <input type="checkbox" class="check" id="Trail" value="Trail" />
                            <label for="Trail">Trail</label><br>
                        </div>
                        <div class="checkon">
                            <input type="checkbox" id="Enduro" checked value="Enduro" />
                            <label for="Enduro">Enduro</label><br>
                        </div>
                        <div class="checkon">
                            <input type="checkbox" id="Pista" value="Pista" />
                            <label for="Pista">Pista</label><br>
                        </div>
                    </h4>
                </div>
                <div class="Condicion">
                    <h4>Condicion<br>
                        <div class="checkon">
                            <input type="checkbox" class="check" id="Nuevos" checked value="Nuevos" />
                            <label for="Nuevos">Nuevos</label><br>
                        </div>
                        <div class="checkon">
                            <input type="checkbox" id="Usado" value="Usado" />
                            <label for="Usado">Usado</label><br>
                        </div>
                        <div class="checkon">
                            <input type="checkbox" id="Reacondicionado" value="Reacondicionado" />
                            <label for="Reacondicionado">Reacondicionado</label><br>
                        </div>
                    </h4>
                </div>



            </div>
            <div class="cards">
                <div class="NoYamaha">
                    <div class="card">
                        <img src="CSS/IMG/Prod/prod1.webp" alt="">
                        <div class="info">
                            <h5>Enduro-Nuevo</h5>
                            <h2>Amortiguadores Libero</h2>
                            <h3>$121.000</h3>
                            <button class="btn1">
                                Ver producto
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ProdYamaha">
                    <div class="card" style="height: 484px !important;">
                        <img src="CSS/IMG/Prod/prod2.webp">
                        <div class="info">
                            <h5 id="filtroYamaha">Enduro-Nuevo</h5>
                            <h2>Kit De Arrastre</h2>
                            <h3>$129.500</h3>
                            <button class="btn1" onclick="redirecionar()">
                                Ver producto
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="NoYamaha">
                    <div class="card">
                        <img src="CSS/IMG/Prod/prod3.webp" alt="">
                        <div class="info">
                            <h5>Enduro-Nuevo</h5>
                            <h2>Carburador Bws100</h2>
                            <h3>$205.000</h3>
                            <button class="btn1">
                                Ver producto
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ProdYamaha">
                    <div class="card">
                        <img src="CSS/IMG/Prod/prod4.webp" alt="">
                        <div class="info">
                            <h5 id="filtroYamaha1">Enduro-Nuevo</h5>
                            <h2>Kit Cilindro Completo</h2>
                            <h3>$268.000</h3>
                            <button class="btn1">
                                Ver producto
                            </button>
                        </div>
                    </div>
                </div>
                <div class="ProdYamaha">
                    <div class="card">
                        <img src="CSS/IMG/Prod/prod5.webp" alt="">
                        <div class="info">
                            <h5 id="filtroYamaha2">Enduro-Nuevo</h5>
                            <h2>Exosto DTK / DT</h2>
                            <h3>$388.000</h3>
                            <button class="btn1">
                                Ver producto
                            </button>
                        </div>
                    </div>
                </div>
                <div class="NoYamaha">
                    <div class="card">
                        <img src="CSS/IMG/Prod/prod6.webp" alt="">
                        <div class="info">
                            <h5>Enduro-Nuevo</h5>
                            <h2>Campana Trasera</h2>
                            <h3>$247.000</h3>

                            <button class="btn1">
                                Ver producto
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cargar NoYamaha">
                    <button class="btnmas" id="btnmas" onclick="cargar()">
                        Ver más Productos
                    </button>
                </div>
                <div class="mas" id="mas">
                    <div class="NoYamaha">
                        <div class="cardmas" id="cardmas">
                            <img src="CSS/IMG/Prod/prod7.webp" alt="">
                            <div class="info">
                                <h5>Enduro-Nuevo</h5>
                                <h2>Bujía Iridium</h2>
                                <h3>$70.000</h3>

                                <button class="btn1">
                                    Ver producto
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="NoYamaha">
                        <div class="cardmas" id="cardmas">
                            <img src="CSS/IMG/Prod/prod8.webp" alt="">
                            <div class="info">
                                <h5>Enduro-Nuevo</h5>
                                <h2>Correa Motor</h2>
                                <h3>$148.000</h3>

                                <button class="btn1">
                                    Ver producto
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    function filtrar() {
                        let checkbox = document.getElementById("Yamaha");
                        let elementosModificados = document.querySelectorAll(".info h5[id^='filtroYamaha']");

                        if (checkbox.checked) {
                            elementosModificados.forEach(function (elemento) {
                                elemento.innerHTML = "Yamaha-Enduro-Nuevo";
                            });
                            document.querySelectorAll('.NoYamaha').forEach(function (elemento) {
                                elemento.style.display = "none ";
                            });
                        } else {
                            elementosModificados.forEach(function (elemento) {
                                elemento.innerHTML = "Enduro-Nuevo";
                            });
                            document.querySelectorAll('.NoYamaha').forEach(function (elemento) {
                                elemento.style.display = "flex";
                            });
                            document.querySelectorAll('.NoYamaha').forEach(function (elemento) {
                                document.getElementById("NoYamaha").removeAttribute("display");
                            });
                        };
                    }

                    function cargar() {
                        {
                            document.getElementById('btnmas').style.display = "none";
                            document.getElementById('mas').style.display = "flex";
                        }
                    }

                    function redirecionar() {
                        window.location.href = 'detalleProduct.html';
                    }

                    document.addEventListener('DOMContentLoaded', function () {
                        var elems = document.querySelectorAll('.collapsible');
                        var instances = M.Collapsible.init(elems, {});

                        var collapsibleInstance = M.Collapsible.getInstance(elems[0]);

                        // Escucha el evento de apertura del elemento
                        elems[0].addEventListener('click', function () {
                            if (collapsibleInstance.isOpen(0)) {
                                // Cambia el color del título cuando se abre
                                var header = document.querySelector('.collapsible-header');
                                header.style.color = '#FF6A00';
                            } else {
                                // Restaura el color del título cuando se cierra
                                var header = document.querySelector('.collapsible-header');
                                header.style.color = '#333';
                            }
                        });
                    });

                </script>
            </div>
        </div>
    </div>
</section>