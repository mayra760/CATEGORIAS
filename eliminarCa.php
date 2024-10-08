<?php
session_start();

include 'conexion.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    $id_ca =intval($_GET['id']);
    $sql="DELETE FROM tb_carrito WHERE id_ca=?";

    if($stmt=$conexion->prepare($sql)){
        $stmt->bind_param('i', $id_ca);
        $stmt->execute();

        if($stmt->affected_rows > 0 ){
            echo "<script>
                    localStorage.setItem('mensaje', 'Producto eliminado del carrito');
                    window.location.href = 'carrito.php';
                  </script>";

        }else{
            echo "<script>
                    localStorage.setItem('mensaje', 'Error al eliminar producto');
                    window.location.href = 'carrito.php';
                  </script>";
        }
    }
}