<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QcXsB6BnKcPDaR6xOsEsM1t/BPvNvWQNTMArGZzg9Zu4ndL/EVXlW6fX+8X9RM1jQCGwMD1YMqipf5y8VX9x8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <style>
        .dark-bg {
            background-color: black;
        }
        .white-text {
            color: white;
        }
        .custom-bg-celeste {
    background-color: #ADD8E6; /* Código hexadecimal para un tono de celeste */
}
    </style>
</head>
<body class="font-sans antialiased dark-bg dark-text/50">

<nav class="navbar navbar-expand-lg navbar-light custom-bg-celeste">

    <div class="container">
        <a class="navbar-brand" href="#">Mi Sitio</a>
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

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://liveanimalshipping.com/archivos/226Mascota.jpg" class="d-block w-100" alt="Mascota feliz en un viaje">
    </div>
    <div class="carousel-item">
      <img src="https://letsenhance.io/static/73136da51c245e80edc6ccfe44888a99/1015f/MainBefore.jpg" class="d-block w-100" alt="Antes de la transformación de la mascota">
    </div>
    <div class="carousel-item">
      <img src="http://liveanimalshipping.com/archivos/226Mascota.jpg" class="d-block w-100" alt="Otra imagen de la mascota">
    </div>
  </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
// Inicializa el carrusel
$('#carouselExampleSlidesOnly').carousel();
</script>

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
