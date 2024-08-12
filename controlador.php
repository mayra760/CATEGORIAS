<?php

include 'plantill2.php';
include_once 'clase.php';
if(isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];

    switch ($seccion) {
        case 'seccion1':
            include 'seccion1.php';
            break;
            case 'seccion2':
              include 'seccion2.php';
              break;
        case 'vista':
            include 'vista.php';
            break;
        case 'favoritos':
            include 'favoritos.php';
            break;
        case 'carrito';
            include 'carrito.php';
            break;
        case 'niñ@s':
            include 'niñ@.php';
            break;
        case 'damas y caballeros':
            include 'categ.php';
            break;
        case 'Accesorios':
            include 'accesorios.php';
            break;
        case 'zapatos':
            include 'zapatos.php';
            break;
        default:
        echo "<div class='container'><center><h2>Esta seccion no existe</h2></center></div>";
    }
} else {
    echo 'No se ha especificado ninguna sección.';
}
