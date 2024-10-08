<?php
session_start();
include 'plantill2.php';
?>
<head>

    <title>Carrito</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="css/carrito.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">

</head>
<body> 
    <div class="container cart-container">
        <h2 class="cart-title"><i class='fa fa-shopping-cart'></i> Tu carrito</h2>
        <?php
        include 'conexion.php';
        include_once 'clase.php';
        echo Productos::verCarrito();
        ?>
        <center><button >pagara ahora</button></center> 
    </div>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/añadirCarro.js"></script>
    <script src="js/scriptt.js"></script>
</body>
