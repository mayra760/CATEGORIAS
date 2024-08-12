<?php

class Modelo{
    public static function sqlMostrarPro(){
        include 'conexion.php';
        $ids = [1, 8,3,4,14, 19,16,20,23];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        return $consulta = $conexion->query($sql);
        
    }

    public static function sqlmostrarCateg() {
        include 'conexion.php';
        $ids = [1, 8, 9, 10, 11, 12];
        $id = implode(',', $ids);  
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        return $consulta = $conexion->query($sql);
    }

    public static function sqlCateNiños(){
        include 'conexion.php';
        $salida = "";//se incluye una salida vacia para almacenar estructuras chtml
        $ids = [2, 3, 4, 5, 6, 7];//id de los productos que yo quiero que se muestren de la base de datos
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";//se llama la base de datos
        return $consulta = $conexion->query($sql);
    }

    public static function sqlverAcce(){
        include 'conexion.php';
        $salida = "";
        $ids = [13, 14, 15, 16, 17, 18];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        return $consulta = $conexion->query($sql);
    }

    public static function sqlverZapatos(){
        include 'conexion.php';
        $salida = "";
        $ids = [19,20,21,22,23,24];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
       return $consulta = $conexion->query($sql);
    }

    public static function sqlVerFavoritos(){
        include 'conexion.php';
        $salida = "";
        $sql = "SELECT * FROM tb_favoritos";
        return $consulta = $conexion->query($sql);
    }

    public static function sqlverCarrito(){
        include 'conexion.php';
        $salida = "";
        $sql = "SELECT * FROM tb_carrito";
        return $consulta = $conexion->query($sql);
    }

    public static function sqlBuscador() {
        include 'conexion.php'; // Conexión a la base de datos
    
        $query = isset($_GET['query']) ? $_GET['query'] : ''; // Se obtiene el término de la búsqueda
    
        // Consulta a la base de datos
        $sql = "SELECT * FROM tb_productos WHERE nombre_producto LIKE ?";
        $fila = $conexion->prepare($sql);
        $searchTerm = "%" . $query . "%";
        $fila->bind_param('s', $searchTerm);
        $fila->execute();
    
        $resultado = $fila->get_result();
        $fila->close(); // Cerramos la consulta preparada
        $conexion->close(); // Cerramos la conexión
    
        return $resultado;
    }
    
}