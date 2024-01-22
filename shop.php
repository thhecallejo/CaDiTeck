<?php
# Conectamos la pagina con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba_datos";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>



<!--Cabecera de la pagina-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tienda CaDi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

     <!-- Favicon -->
     <link href="favicon_io (1)/android-chrome-192x192.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">




</head>

<body>
    <!-- Comienzo Cabecera -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="SobreNosotros.html">Sobre Nosotros</a>
                    <a class="text-body mr-3" href="contact.html">Contacto</a>
                    <a class="text-body mr-3" href="ayuda.html">Ayuda</a>
                    
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mi Cuenta</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="cerrar_sesion.php" class="dropdown-item">Cerrar Sesión</a>
                            
                    </div>                    
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
  
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                
                <a href="index.html" class="text-decoration-none">
                    <img class="w-10 h-100" src="img/logo.png" width="160">
                </a>
            </div>
            <!--Barra de buscar productos-->
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar Productos">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
             <!--Contacto-->
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Servicio al cliente</p>
                <h5 class="m-0">+34 652 99 51 66</h5>
            </div>
        </div>
    </div>
    <!-- Fin de Cabecera -->


    <!-- Comienzo Categorias Desplegable -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categorias</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Procesadores <i class="fa fa-angle-right float-right mt-1"></i></a>
                             <!--Sub Despegable-->
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Intel</a>
                                <a href="" class="dropdown-item">AMD</a>
                                <a href="" class="dropdown-item">Otros</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Graficas <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">NVIDIA</a>
                                <a href="" class="dropdown-item">AMD</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Refrigeración <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Liquida</a>
                                <a href="" class="dropdown-item">Aire</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Almacenamiento <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">SSD</a>
                                <a href="" class="dropdown-item">M.2</a>
                                <a href="" class="dropdown-item">HDD</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Portatiles</a>
                        <a href="" class="nav-item nav-link">TV y audio</a>
                        <a href="" class="nav-item nav-link">Componentes</a>
                        <a href="" class="nav-item nav-link">Smartphones</a>
                        <a href="" class="nav-item nav-link">Consolas</a>
                        <a href="" class="nav-item nav-link">Accesorios</a>
                    </div>
                </nav>
            </div>
            
           <!--LOGO CUANDO ENCOGEN LA PAGINA-->
           <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                <img class="w-10 h-100" src="img/logo.png" width="160">
                </a>
        <!--Boton Con contenido al minimizar-->
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Inicio</a>
                        <a href="shop.php" class="nav-item nav-link">Tienda</a>
                        <a href="detail.html" class="nav-item nav-link">Gráficas</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Paginas <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="cart.html" class="dropdown-item">Carrito</a>
                                <a href="checkout.html" class="dropdown-item">Revisar Pedido</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contacto</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="cart.html" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
    <!-- Fin de la Barra de Navegación -->


    <!-- Inicio de la Ruta -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.html">Inicio</a>
                    <a class="breadcrumb-item active">Tienda</a>
                    <span class="breadcrumb-item active">Lista de la Compra</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Final de la Ruta-->


    <!-- Comienzo tienda -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Filtro de Precios -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filtrar</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">Todos los precios</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">0€ - 100€</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">100€ - 200€</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">200€ - 300€</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">300€ - 400€</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">400€ - 500€</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Final Filtro de Precios-->
                
                <!-- Filtro de color -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filtrar por color</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">Todos los colores</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Negro</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">Blanco</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Rojo</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">azul</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Verde</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!--  Final Filtro de color -->

                <!-- Filtro de Marca -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Marca</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">Todas las marcas</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">Logitech</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">Razer</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">Corsair</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-4">
                            <label class="custom-control-label" for="size-4">CoolerMaster</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="size-5">
                            <label class="custom-control-label" for="size-5">Lenovo</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Filtro de Marca -->
            </div>
            <!-- Final de Filtro -->


            <!-- Inicio de Productos de Tienda -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                           <!-- Filtro Reciente,popular,etc -->
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Orden</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Reciente</a>
                                        <a class="dropdown-item" href="#">Popular</a>
                                        <a class="dropdown-item" href="#">Mejor valoración</a>
                                    </div>
                                </div>
                                <!-- Filtar para mostar x productos -->
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Mostrar</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <?php
   
  // Realiza la consulta a la base de datos
$query = "SELECT * FROM Productos";
$result = $conn->query($query);

// Almacena los resultados en un array
$productos = array();
while ($producto = $result->fetch_assoc()) {
    $productos[] = $producto;
}

// Muestra los productos
foreach ($productos as $producto) {
?>
    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
        <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
                <!-- Utiliza la columna 'imagen' de la base de datos para mostrar la imagen -->
                <?php
                // Mostrar la imagen si está presente
                if (!empty($producto['imagen'])) {
                    $imagenBase64 = base64_encode($producto['imagen']);
                    echo '<img class="img-fluid w-100" src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="">';
                } else {
                    // Mostrar una imagen de relleno si no hay imagen
                    echo '<img class="img-fluid w-100" src="img/imagen_no_disponible.jpg" alt="">';
                }
                ?>

                <div class="product-action">
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
    <!-- Enlace a la página del producto (puede necesitar ajustes) -->
    <a class="h6 text-decoration-none text-truncate" href=""><?php echo $producto['Nombre']; ?></a>
    
    <!-- Contenedor de información sobre el producto -->
    <div class="d-flex align-items-center justify-content-center mt-2">
        <!-- Precio actual del producto -->
        <h5><?php echo $producto['Precio']; ?>.00€</h5>
        
        <!-- Precio anterior (tachado) si hay un descuento -->
        <h6 class="text-muted ml-2"><del><?php echo $producto['Precio_antes']; ?>.00€</del></h6>
    </div>
</div>

        </div>
    </div>
<?php
}
?>
                <!-- Navegar adelante y atrás-->
                    <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">ANTERIOR</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">SIGUIENTE</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Final de Productos de Tienda -->
        </div>
    </div>
    <!-- Fin de Tienda -->


<!-- Comienzo del pie de página -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <!-- Sección de información de contacto -->
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Contacto</h5>
                <!-- Dirección, correo electrónico y número de teléfono -->
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>C/ Los Gansos 21, Madrid, ES</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@cadikeck.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+34 652 99 51 66</p>
            </div>
            
            <!-- Columna con enlaces rápidos y de cuenta -->
            <div class="col-lg-8 col-md-12">
                <div class="row">
                <!-- Sección de enlaces rápidos -->
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">COMPRA RÁPIDA</h5>
                <!-- Enlaces rápidos a secciones del sitio -->
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Nuestra tienda</a>
                            <a class="text-secondary mb-2" href="Gráficas"><i class="fa fa-angle-right mr-2"></i>Gráficas</a>
                            <a class="text-secondary mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Carrito</a>
                            <a class="text-secondary mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Revisar Pedido</a>
                            <a class="text-secondary" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contactanos</a>
                        </div>
                    </div>
                    <!-- Sección de enlaces de cuenta -->
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Mi cuenta</h5>
                     <!-- Enlaces relacionados con la cuenta del usuario -->
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-secondary mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Nuestra tienda</a>
                            <a class="text-secondary mb-2" href="Gráficas"><i class="fa fa-angle-right mr-2"></i>Gráficas</a>
                            <a class="text-secondary mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Carrito</a>
                            <a class="text-secondary mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Revisar Pedido</a>
                            <a class="text-secondary" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contactanos</a>
                        </div>
                    </div>
                <!-- Sección de boletín informativo y redes sociales -->
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">BOLETIN INFORMATIVO</h5>
                <!-- Formulario de suscripción al boletín -->
                        <p>Estate atento a los ultimos lanzamientos antes que nadie. ¡Que no se te escapen!</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tu Direcion de Correo">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Registrate</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Siguenos en</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Sección de derechos de autor y logos de pagos -->
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">CaDiTECK.com</a>. Todos los derechos y diseño reservados
                    por
                    <a class="text-primary" href="index.html">CaDiTECK</a>
                </p>
            </div>
             <!-- Columna con logos de pagos -->
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
<!-- Fin del pie de página -->



    <!-- Boton volver arriba -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Librarias -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contacto Javascript Archivo -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Plantilla Javascript -->
    <script src="js/main.js"></script>
</body>

</html>