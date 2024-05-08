<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perro y Gato</title>
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
    background-image: url('https://img.freepik.com/fotos-premium/perros-gatos-que-miran-escondidas-sobre-banner-tienda-mascotas-linea-superior-madera-transparente-sonrisa-feliz-imagen-ia-generativa-divertida-weber_31965-205988.jpg');
    background-size: cover; /* Para cubrir todo el área */
    background-position: center; /* Para centrar la imagen */
    /* Otros estilos opcionales */
    padding: 50px; /* Ajusta el relleno según sea necesario */
    color: white; /* Color de texto */
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
    <a class="dropdown-item" href="/novedades"><i class="fas fa-bullhorn"></i> Novedades</a>
    <a class="dropdown-item" href="/ofertas"><i class="fas fa-tags"></i> Ofertas</a>
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
                    <h2>Bienvenido a nuestra tienda de alimentos para perros y gatos</h2>
                    <p>Somos tu destino confiable para todo lo relacionado con la alimentación y el cuidado de tus mascotas. En nuestra tienda, encontrarás una amplia variedad de alimentos nutritivos y saludables para perros y gatos de todas las edades y necesidades dietéticas.</p>
                    <p>Nuestros productos están cuidadosamente seleccionados para garantizar la mejor calidad y el máximo sabor, para que puedas mantener a tus mascotas felices y saludables en todo momento.</p>
    
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
<p>Alimentos Para Perros</p>
<br><br><br>
<div class="card-container">
<div class="card-container">
    <div class="card">
        <img src="https://images.ecestaticos.com/XKJFrabFEJ1xTt_2Ox8dFkVyV0c=/0x0:2121x1414/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Fd67%2Fa8d%2F860%2Fd67a8d8604edeac49386e96e2890fe7a.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">RICOCAN Cachorros Razas Pequeñas Carne y Leche Bolsa 3Kg.</h2>
            <p class="card-description">S/43.00</p>
            <button onclick="agregarAlCarrito('RICOCAN Cachorros Razas Pequeñas Carne y Leche Bolsa 3Kg.', 43.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://tiendanestle.pe/cdn/shop/products/7613287613264.jpg?v=1654535719" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento seco para perros Dogui Cachorros 8kg</h2>
            <p class="card-description">S/26.00</p>
            <button onclick="agregarAlCarrito('Alimento seco para perros Dogui Cachorros 8kg', 26.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://siagro.com.ar/wp-content/uploads/2021/03/135054.webp" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">PEDIGREE® Puppy – Comida seca para perros medianos con pollo y arroz</h2>
            <p class="card-description">S/30.00</p>
            <button onclick="agregarAlCarrito('PEDIGREE® Puppy – Comida seca para perros medianos con pollo y arroz', 30.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://mendoza.pluspet.com.ar/cdn/shop/products/alimento-ganacan-perro-cachorro-01.jpg?v=1708699405" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">GANACAN Mix es de sabor Carne, Hígado y Pollo</h2>
            <p class="card-description">S/90.00</p>
            <button onclick="agregarAlCarrito('GANACAN Mix es de sabor Carne, Hígado y Pollo', 90.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://promart.vteximg.com.br/arquivos/ids/471954-1000-1000/image-9bf2dbd8bb484e13b3b370b1e1455976.jpg?v=637287896732130000" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Comida para Perros RICOCAN Adultos Paté con Pollo Lata 330g</h2>
            <p class="card-description">S/7.00</p>
            <button onclick="agregarAlCarrito('Comida para Perros RICOCAN Adultos Paté con Pollo Lata 330g', 7.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://www.superpet.pe/on/demandware.static/-/Sites-SuperPet-master-catalog/default/dwfd347d5f/images/canbo-enlatado-cachorro-hipoalergenico.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Canbo Enlatado Cachorro Hipoalergenico 330 g</h2>
            <p class="card-description">S/8.00</p>
            <button onclick="agregarAlCarrito('Canbo Enlatado Cachorro Hipoalergenico 330 g', 8.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://patihuellas.pe/wp-content/uploads/2021/12/Dog_Chow-adultos-cordero_lata-374Gr.png" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Dog Chow Cordero y arroz enlatado de 374gr  Patihuellas</h2>
            <p class="card-description">S/ 10.00</p>
            <button onclick="agregarAlCarrito('Dog Chow Cordero y arroz enlatado de 374gr  Patihuellas', 10.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://ripleype.imgix.net/https%3A%2F%2Fdpq25p1ucac70.cloudfront.net%2Fseller-place-files%2Fmrkl-files%2F2807%2FMASCOTAS%2F7756167000423.png?w=750&h=555&ch=Width&auto=format&cs=strip&bg=FFFFFF&q=60&trimcolor=FFFFFF&trim=color&fit=fillmax&ixlib=js-1.1.0&s=3cb59174db91c6cb13d2bd734ec5b645" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">ORIGENS ORIGINAL CARNE DE RES/PAVO 170GR - ADULTO SOBREPESO </h2>
            <p class="card-description">S/12.00</p>
            <button onclick="agregarAlCarrito('ORIGENS ORIGINAL CARNE DE RES/PAVO 170GR - ADULTO SOBREPES', 12.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://m.media-amazon.com/images/I/81MXWFfe8bL._AC_UF1000,1000_QL80_DpWeblab_.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Dulces para perros/ Pedigree Dentastix</h2>
            <p class="card-description">S/14.00</p>
            <button onclick="agregarAlCarrito('Dulces para perros/ Pedigree Dentastix', 14.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://aculi.pe/wp-content/uploads/2020/11/hills-sd-soft-savories-Treats_sd_beef___cheddar-acu-li-pet-shop-snack-perro-adulto-todas-las-razas.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Hill's SD - Golosinas Suaves para Perros Cachorros y Adultos - Carne & Queso</h2>
            <p class="card-description">S/4.00</p>
            <button onclick="agregarAlCarrito('Golosinas suaves', 4.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://plazavea.vteximg.com.br/arquivos/ids/598028/20116581.jpg?v=637436692215970000" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Comida para Perros RICOCRACK Galletas Adultos Todas las Razas Multisabores</h2>
            <p class="card-description">S/9.00</p>
            <button onclick="agregarAlCarrito('Comida para Perros RICOCRACK Galletas Adultos Todas las Razas Multisabores', 9.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://puppiscolombia.vteximg.com.br/arquivos/ids/166737-1000-1000/EAN-7707205153519.jpg?v=637353519361830000" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Snack Para Perro Chunky Delidog Mix</h2>
            <p class="card-description">S/7.00</p>
            <button onclick="agregarAlCarrito('Snack Para Perro Chunky Delidog Mix', 7.00)" class="custom-button">Añadir al carrito</button>

        </div>
    </div>
</div>
    </section>


<br><br><br>
<section class="py-5 custom-bg-celeste">
<p>Alimentos Para Gatos</p>
<br><br><br>
<div class="card-container">
    <div class="card">
        <img src="https://plazavea.vteximg.com.br/arquivos/ids/347455-512-512/20083536.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Comida para Gatos RICOCAT Gatitos Carne Pescado y Leche Bolsa 9Kg </h2>
            <p class="card-description">S/43.00</p>
            <button onclick="agregarAlCarrito('Comida para Gatos RICOCAT Gatitos Carne Pescado y Leche Bolsa 9Kg', 43.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://purina.com.pe/sites/default/files/2022-11/delimix_salmon_carne_cat_chow.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">DELIMIX ADULTOS SALMON,CARNE Y POLLO 3kg</h2>
            <p class="card-description">S/12.00</p>
            <button onclick="agregarAlCarrito('DELIMIX ADULTOS SALMON,CARNE Y POLLO 3kg', 12.00)"class="custom-button">Añadir al carrito</button>
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
    <div class="card">
        <img src="https://promart.vteximg.com.br/arquivos/ids/471837-1000-1000/image-b17f6e747fd54607a88200cedea60be9.jpg?v=637287872624670000" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Comida para Gatos RICOCAT Adultos Paté Sardina y Pollo Lata 330g</h2>
            <p class="card-description">S/7.80</p>
            <button onclick="agregarAlCarrito('Comida para Gatos RICOCAT Adultos Paté Sardina y Pollo Lata 330g', 7.80)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://patihuellas.pe/wp-content/uploads/2022/11/Supercat-Pate-sabor-carne-160-gr-Gatitos.png" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Supercat Paté sabor carne 160 g Gatitos Patihuellas</h2>
            <p class="card-description">S/4.00</p>
            <button onclick="agregarAlCarrito('Supercat Paté sabor carne 160 g Gatitos Patihuellas', 4.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://vivanda.vtexassets.com/arquivos/ids/386487-800-450?v=637945922769000000&width=800&height=450&aspect=true" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Comida para Gato FANCY FEAST Filetes de Salmón Petits Lata 85g |</h2>
            <p class="card-description">S/6.00</p>
            <button onclick="agregarAlCarrito('Comida para Gato FANCY FEAST Filetes de Salmón Petits Lata 85g ', 6.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://www.purina.es/sites/default/files/2021-12/08410168093066_1%20Front%20Pack.jpg" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">FELIX® Estándar Lata Pollo y Pato en Gelatina | Purina®</h2>
            <p class="card-description">S/4.00</p>
            <button onclick="agregarAlCarrito('FELIX® Estándar Lata Pollo y Pato en Gelatina | Purina®', 4.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://i0.wp.com/cat-oh.com/wp-content/uploads/2022/11/churu_skin_and_coat_atun_scallop1.jpg?resize=317%2C317&ssl=1" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">CHURUgATOS Dulce Para Gatos</h2>
            <p class="card-description">S/3.00</p>
            <button onclick="agregarAlCarrito('CHURUgATOS', 3.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://optimumpet.com.ar/wp-content/uploads/2019/06/Optimum-Bolsa-Kitten_.png" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">OPTIMUN sAbor Pollo 4kg </h2>
            <p class="card-description">s/15.00</p>
            <button onclick="agregarAlCarrito('OPTIMUN sAbor Pollo 4kg ', 15.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://walmartsv.vtexassets.com/arquivos/ids/320393-500-auto?v=638246220333870000&width=500&height=auto&aspect=true" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento Para GatO ALIMIAU sabor PESCADO</h2>
            <p class="card-description">S/12.00</p>
            <button onclick="agregarAlCarrito('Alimento Para GatO ALIMIAU sabor PESCADO', 12.00)"class="custom-button">Añadir al carrito</button>
        </div>
    </div>
    <div class="card">
        <img src="https://jumboargentina.vtexassets.com/arquivos/ids/617228/Alimento-Sabrositos-Para-Gatos-Pescado-X1kg-1-856114.jpg?v=637437282517030000" alt="" class="card-img">
        <div class="card-content">
            <h2 class="card-title">Alimento SABROSITOS para gatos Pescado x1Kg </h2>
            <p class="card-description">S/10.00</p>
            <button onclick="agregarAlCarrito('Alimento SABROSITOS para gatos Pescado x1Kg', 10.00)"class="custom-button">Añadir al carrito</button>
        </div>
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