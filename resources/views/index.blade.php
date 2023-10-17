<!DOCTYPE html>
<head>
    <title>Taller JM</title>
    <link rel="shortcut icon" href="/img/LOGO.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <header class="hero">
        <section class="nab container">
            <div class="nab__logo">
                <h2 class="nab__title fontNegr">JM</h2>
            </div>
            <ul class="nab__link nab__link--menu">
                <li class="nab__items">
                    <h5><a class="nab__links fontNegr" onclick="scrollToElement('.sedes');M.toast({html: 'Mira nuestras Sedes'})">Sedes</a></h5>
                    <script>
                        function scrollToElement(className) {
                            var element = document.querySelector(className);
                            if (element) {
                                window.scrollTo({
                                    top: element.offsetTop,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    </script>
                </li>
                <li class="nab__items">
                    <h5><a class="nab__links fontNegr" onclick="scrollToElement('.plan__services');M.toast({html: 'Mira nuestros Servicios'})">Servicios</a></h5></a>

                    <script>
                        function scrollToElement(className) {
                            var element = document.querySelector(className);
                            if (element) {
                                window.scrollTo({
                                    top: element.offsetTop,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    </script>
                </li>
                <li class="nab__items">
                    <h5><a class="nab__links fontNegr" onclick="scrollToElement('.prod');M.toast({html: 'Mira nuestros productos'})">Productos</a></h5></a>

                    <script>
                        function scrollToElement(className) {
                            var element = document.querySelector(className);
                            if (element) {
                                window.scrollTo({
                                    top: element.offsetTop,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    </script>
                </li>
            </ul>
            <div class="nab__menu">
                <img src=".IMG/LOGO.png" class="nab__img">
            </div>
        </section>
        <section class="hero__container container">
            <h1 class="hero__title">Taller JM</h1>
            <p class="hero__paragraph" style=color:white;font-size:22px;>Empresa especializada en las motocicletas, tanto la parte de mantenimiento y reparación, como el área de venta de repuestos y accesorios</p>
            <a href="prueba.php" title="Iniciar Sesión" style=color:white class="cta">Iniciar Sesión</a>
        </section>
    </header>
    @component('components.sedes')
    @endcomponent('')

    @component('components.prodDes')
    @endcomponent('')

    @component('components.productos')
    @endcomponent('')

    @component('components.services')
    @endcomponent('')
    
    @component('components.proveedores')
    @endcomponent('')
    
    @component('components.footer')
    @endcomponent('')
</body>
</html>