<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otras Mascotas</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QcXsB6BnKcPDaR6xOsEsM1t/BPvNvWQNTMArGZzg9Zu4ndL/EVXlW6fX+8X9RM1jQCGwMD1YMqipf5y8VX9x8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .custom-button {
    background-color: #ADD8E6;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.custom-button:hover {
    background-color: #87CEEB; /* Cambia el color cuando se pasa el ratón sobre el botón */
}
        .dark-bg {
            background-color: black;
        }
        .white-text {
            color: white;
        }
        .custom-bg-celeste {
    background-color: #ADD8E6; /* Código hexadecimal para un tono de celeste */
}
    
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Distribuye las tarjetas uniformemente */
            gap: 20px; /* Espacio entre las tarjetas */
            padding: 20px; /* Espacio interno para las tarjetas */
        }
        .card {
    width: calc(25% - 20px); /* Ajuste del ancho de la tarjeta para 4 en una fila */
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
        .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .card-description {
            font-size: 14px;
            color: #666;
        }
        .welcome-section {
    background-image: url('https://i.pinimg.com/originals/0a/5d/d8/0a5dd80daa57f573a22aca516dcfa6b6.jpg');
    background-size: cover; /* Para cubrir todo el área */
    background-position: center; /* Para centrar la imagen */
    /* Otros estilos opcionales */
    padding: 50px; /* Ajusta el relleno según sea necesario */
    color: black; /* Color de texto */
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light custom-bg-celeste">

    <div class="container">
        <a class="navbar-brand" href="/">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i> Menú
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="/perro-y-gato"><i class="fas fa-dog"></i> Perro y Gato</a>
    <a class="dropdown-item" href="/otras-mascotas"><i class="fas fa-paw"></i> Otras Mascotas</a>
    <a class="dropdown-item" href="/peluqueria-canina"><i class="fas fa-cut"></i> Peluquería Canina</a>
    <a class="dropdown-item" href="/adopciones"><i class="fas fa-hand-holding-heart"></i> Adopciones</a>
</div>
                </li>
                <li class="nav-item">
    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Carrito</a>
    
</li>
            </ul>
        </div>
    </div>
</nav>

    <header class="py-16">
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <section class="py-5 welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2>Bienvenido a nuestra tienda de alimentos para todas las mascotas</h2>
                    <p>Somos tu destino confiable para todo lo relacionado con la alimentación y el cuidado de tus mascotas. En nuestra tienda, encontrarás una amplia variedad de alimentos nutritivos y saludables para perros y gatos de todas las edades y necesidades dietéticas.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Carrito de compras -->
<div class="fixed-bottom bg-white p-3">
    <h4 class="mb-3">Carrito de Compras</h4>
    <ul id="carrito-list" class="list-group">
        <!-- Los productos del carrito se mostrarán aquí -->
    </ul>
    @auth <!-- Solo se mostrará si el usuario ha iniciado sesión -->
    <button onclick="window.location.href='/otra-ruta'" class="custom-button">Realizar compra</button>
    <!-- Calcula y muestra el total del precio a pagar -->
    @php
        $total = 0;
        foreach($carrito as $producto) {
            $total += $producto['precio'];
        }
    @endphp
    <p>Total a pagar: S/{{$total}}</p>
    @endauth
</div>
<section class="py-5" style="background-color: #7469B6;">
<br>
<p>Alimentos De Hamster, Aves y Peces</p>
<br><br><br>
<div class="card-container">
<div class="card-container">
    <div class="card">
        <img src="https://www.salitreonline.com/wp-content/uploads/2019/11/27967.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimentos de Aves TROPICAN .</h2>
            <p class="card-description">S/13.00</p>
            <button onclick="agregarAlCarrito('Alimentos de Aves TROPICAN ', 13.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://dojiw2m9tvv09.cloudfront.net/9927/product/L_ave_xsmall14475.png?213" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento de Aves Tre Pet Store</h2>
            <p class="card-description">S/16.00</p>
            <button onclick="agregarAlCarrito('Alimento de Aves Tre Pet Store', 16.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://dojiw2m9tvv09.cloudfront.net/9927/product/L_small_birds8955.png?213" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">MAZURI Small Bird Diet</h2>
            <p class="card-description">S/9.80</p>
            <button onclick="agregarAlCarrito('MAZURI Small Bird Diet', 9.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://i5.walmartimages.com/asr/b00b017f-79cd-4b1e-b213-52c17cd78261_1.cecbfe8c7d563b6d8616c5bdc179bd41.jpeg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">API Goldfish Pellets, Fish Food</h2>
            <p class="card-description">S/10.00</p>
            <button onclick="agregarAlCarrito('API Goldfish Pellets, Fish Food', 10.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://m.media-amazon.com/images/I/81nkBHPQwGL._AC_SL1500_.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">TeTramin Crisps Alimento para Peces</h2>
            <p class="card-description">S/7.00</p>
            <button onclick="agregarAlCarrito('TeTramin Crisps Alimento para Peces', 7.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://www.accesoriosparamascota.com.mx/Productos/1146-thickbox_default/alimento-hamster-premium-tropifit-500-grs.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">TroPifit 500g Alimento de Hamster  </h2>
            <p class="card-description">S/8.00</p>
            <button onclick="agregarAlCarrito('TroPifit 500g Alimento de Hamster', 8.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://a1.soysuper.com/48163e3b60d653b2d8129856a49deedd.1500.0.0.0.wmark.77b2ef93.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">VitaKraft Alimento Completo para Hamster</h2>
            <p class="card-description">S/ 10.00</p>
            <button onclick="agregarAlCarrito('VitaKraft Alimento Completo para Hamster', 10.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="http://centromascotas.es/wp-content/uploads/2015/01/Pienso-Hamsters.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Konik Alimento para Hamster</h2>
            <p class="card-description">S/6.00</p>
            <button onclick="agregarAlCarrito('Konik Alimento para Hamster', 6.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://jardiboutique.com/18153-large_default/alimentacion-mixta-y-rica-en-cereales-23kg-para-los-hamsters.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Nature Alimento Mixto y Rica en cereales 2.32KG Para Hamster</h2>
            <p class="card-description">S/14.00</p>
            <button onclick="agregarAlCarrito('Nature Alimento Mixto y Rica en cereales ', 14.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://resources.claroshop.com/medios-plazavip/s2/10382/1308401/5e2f01df15565-279723744fa194d468be525d46a8b1c6f5427ab8-1600x1600.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">1Kg Alimento Conejo Formula Original Vitaminado Redkite</h2>
            <p class="card-description">S/8.00</p>
            <button onclick="agregarAlCarrito('Alimento Conejo Formula Original', 8.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://cdn.pymesenlared.es/img/8/114/17667/0x1200/860147-alimento-conejos-optima-3-kg.1500286568.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento Conejos Adult Optima 3Kg Alimento Conejos Adult Optima,</h2>
            <p class="card-description">S/9.00</p>
            <button onclick="agregarAlCarrito('Alimento Conejos Adult Optima 3Kg', 9.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://www.icasa.com/wp-content/uploads/2018/10/vitp571-alimento-para-conejos-con-cierre-zip-ravit-pro-en-bolsa-700-g_general_4543-800x800.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento para conejos enanos con cierre Zip RaVit Pro en bolsa (700 g)</h2>
            <p class="card-description">S/13.00</p>
            <button onclick="agregarAlCarrito('Alimento para conejos enanos con cierre Zip RaVit Pro en bolsa (700 g)', 13.00)" class="custom-button">Añadir al carrito</button>

        </div>
    </div>
</div>
    <div class="card">
        <img src="https://tse2.mm.bing.net/th?id=OIP.uu8j2tVx40XJhzuWJ58t3AHaHa&pid=Api&P=0&h=180" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Tropical Reptiles Herbivore /Alimento para Reptiles (Mascota)</h2>
            <p class="card-description">S/63.00</p>
            <button onclick="agregarAlCarrito('Tropical Reptiles Herbivore /Alimento para Reptiles', 63.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://megamascotasdf.com/megamascotas/wp-content/uploads/2022/03/WAT054-1.png" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento para Reptiles Acuáticos Reptile Sticks Lomas</h2>
            <p class="card-description">S/40.00</p>
            <button onclick="agregarAlCarrito('Alimento para Reptiles Acuáticos Reptile Sticks Lomas', 40.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://http2.mlstatic.com/D_NQ_NP_700920-MLA54930578654_042023-O.webp" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento Whiskas 1+ Whiskas Gatos para gato adulto todos los tamaños sabor carne en bolsa de 10 kg </h2>
            <p class="card-description">S/54.00</p>
            <button onclick="agregarAlCarrito('Alimento Whiskas 1+ Whiskas Gatos para gato adulto todos los tamaños sabor carne en bolsa de 10 kg', 54.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://plazavea.vteximg.com.br/arquivos/ids/28626995-512-512/20136612.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Comida para Gatos FELIX Sensaciones de Pescado en Salsa para Gatitos Pouch 85g </h2>
            <p class="card-description">S/8.00</p>
            <button onclick="agregarAlCarrito('Comida para Gatos FELIX Sensaciones de Pescado en Salsa para Gatitos Pouch 85g', 8.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    
    
</section>


<!-- Scripts -->
    <script>
        // Objeto para almacenar los productos en el carrito
        let carrito = [];

        // Función para agregar un producto al carrito
        function agregarAlCarrito(nombre, precio) {
            const producto = { nombre, precio };
            carrito.push(producto);
            actualizarCarrito();
        }

        // Función para eliminar un producto del carrito
        function eliminarDelCarrito(index) {
            carrito.splice(index, 1);
            actualizarCarrito();
        }

        // Función para actualizar la vista del carrito
        function actualizarCarrito() {
            const carritoList = document.getElementById('carrito-list');
            carritoList.innerHTML = '';
            carrito.forEach((producto, index) => {
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                listItem.innerHTML = `
                    ${producto.nombre} - S/${producto.precio}
                    <button class="btn btn-danger btn-sm" onclick="eliminarDelCarrito(${index})">Eliminar</button>
                `;
                carritoList.appendChild(listItem);
            });
        }
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<footer class="py-16 text-center text-sm text-white-700 dark:text-white-300">
<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div>
            <h3 class="text-lg font-semibold mb-4">Contáctanos</h3>
            <p>Dirección: Calle Principal #123<br> Teléfono: (123) 456-7890<br> Email: info@tutiendademascotas.com</p>
        </div>
    </div>
</div>
<div class="mt-8 border-t border-white-300 dark:border-white-600 pt-8">
    <p>© 2024 Tu Tienda de Mascotas. Todos los derechos reservados.</p>
</div>
</footer>
</html>





