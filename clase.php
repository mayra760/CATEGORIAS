<?php

class productos {
    public static function mostrarProductos() {
        include 'modelo.php';
        $salida = "";
        $consulta=Modelo::sqlMostrarPro();
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='producto'>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['detalles'] . "' width='100px' class='img-thumbnail'>";
            $salida .= "<p><strong>" . $fila['detalles'] . "</strong></p>";
            $salida .= "</div>";
        }
        return $salida;
    }

    public static function mostrarCategorias() {
        include 'modelo.php';
        $salida = "";
        $consulta = Modelo::sqlmostrarCateg();
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria' data-color='" . strtolower($fila['color']) . "' data-talla='" . strtolower($fila['tallas']) . "'>"; // Cambiado a strtolower
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['ruta_img'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida .= "<button class='btn btn-info btn-agregar-carrito' data-id='{$fila['id_producto']}'><i class='fa fa-shopping-cart'></i> carrito</button>-";
            $salida .= "<button class='btn btn-info btn-favoritos' data-id='{$fila['id_producto']}'><i class='fas fa-heart'></i> Favoritos</button>";
            $salida .= "</div><br>";
            $salida .= "</div><br>";
        }
        $salida .= "</div>";
    
        return $salida;
    }
    
    
    
    

    public static function CateNiños() {
        include 'modelo.php';
        $salida="";
        $consulta=Modelo::sqlCateNiños();
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria' data-color='" . strtolower($fila['color']) . "' data-talla='" . strtolower($fila['tallas']) . "'>";  
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida.="<button class='btn btn-primary btn-agregar-carrito' data-id='{$fila['id_producto']}'><i class='fa fa-shopping-cart'></i> carrito</button>-";
            $salida .= "<button class='btn btn-primary btn-favoritos' data-id='{$fila['id_producto']}'><i class='fas fa-heart'></i> Favoritos</button>";
            $salida .= "</div><br>";
            $salida .= "</div><br>";
        }
        $salida .= "</div>";
        
        return $salida;
    }

    public static function verAccesorios() {
        include 'modelo.php';
        $salida="";
        $consulta=Modelo::sqlverAcce();
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria' data-color='" . strtolower($fila['color']) . "' data-talla='" . strtolower($fila['tallas']) . "'>";
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida .= "<button class='btn btn-info btn-agregar-carrito' data-id='{$fila['id_producto']}'><i class='fa fa-shopping-cart'></i>  carrito</button>-";
            $salida .= "<button class='btn btn-info btn-favoritos' data-id='{$fila['id_producto']}'><i class='fas fa-heart'></i> Favoritos</button><br>";
            $salida .= "</div><br>";
            $salida .= "</div>";
         
            
        }
        $salida .= "</div>";
        
        return $salida;
    }

    public static function verZapatos() {
        include 'modelo.php';
        $salida="";
        $consulta=Modelo::sqlverZapatos();
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria' data-color='" . strtolower($fila['color']) . "' data-talla='" . strtolower($fila['tallas']) . "'>"; 
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'><br>";
            $salida .= "<div class='carfav'>";
            $salida .= "<button class='btn btn-info btn-agregar-carrito' data-id='{$fila['id_producto']}'><i class='fa fa-shopping-cart'></i> carrito</button>-";
            $salida .= "<button class='btn btn-info btn-favoritos' data-id='{$fila['id_producto']}'><i class='fas fa-heart'></i>favoritos</button>";
            $salida .= "</div><br>";
            $salida .= "</div>";
        }
        $salida .= "</div>";
        
        return $salida;
    }
    

    public static function verFavoritos() {
        include 'modelo.php';
        $salida="";
        $consulta= Modelo::sqlVerFavoritos();
        $salida .= "<table class='table table-hover'>";
        $salida .= "<thead><tr><th>Producto</th><th>Cantidad</th><th>Eliminar</th></tr></thead><tbody>";
        
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "
                <tr>
                    <td data-label='Producto' class='product-name'>{$fila['nombre_produc']}</td>
                    <td data-label='Cantidad'>
                        <div class='quantity-buttons'>
                            <input type='text' value='{$fila['cantidad_fav']}' class='quantity-input' readonly>
                        </div>
                    </td>
                    <td data-label='Eliminar'>
                        <a href='eliminarFavo.php?id={$fila['id_favo']}' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>
                    </td>
                </tr>";
        }
        $salida .= "</tbody></table>";
        return $salida;
    }
    
    
    public static function verCarrito() {
        include 'modelo.php';
        $salida = "";
        $consulta = Modelo::sqlverCarrito();
        $salida .= "<table class='table table-hover'>";
        $salida .= "<thead><tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Total</th><th>Eliminar</th></tr></thead><tbody>";
        $subtotal = 0;
        
        while ($fila = $consulta->fetch_assoc()) {
            $total_producto = $fila['precio_pro'] * $fila['cantidad_pro'];
            $subtotal += $total_producto;
            $salida .= "
                <tr>
                    <td data-label='Producto' class='product-name'>{$fila['nombre_producto']}</td>
                    <td data-label='Precio'>\${$fila['precio_pro']}</td> <!-- Corregido aquí -->
                    <td data-label='Cantidad'>
                        <div class='quantity-buttons'>
                            <input type='text' value='{$fila['cantidad_pro']}' class='quantity-input' readonly>
                        </div>
                    </td>
                    <td data-label='Total'>\${$total_producto}</td>
                    <td data-label='Eliminar'>
                        <a href='eliminarCa.php?id={$fila['id_ca']}' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a>
                    </td>
                </tr>";
        }
        
        $salida .= "</tbody>";
        $salida .= "<tfoot><tr class='total-row'><td colspan='3'>Subtotal</td><td>\${$subtotal}</td><td></td></tr></tfoot>";
        $salida .= "</table>";
        
        return $salida;
    }
    

    public static function buscador() {
        include 'modelo.php';
        $salida = "";
        $resultado = Modelo::sqlBuscador();
    
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $salida .= "<div class='product-container'>";
                $salida .= "<h2>" . htmlspecialchars($fila['nombre_producto']) . "</h2>";
                $salida .= "<p>Precio: $" . htmlspecialchars($fila['precio']) . "</p>";
                $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . htmlspecialchars($fila['nombre_producto']) . "' class='img-thumbnail'>";
                $salida .= "<p>" . htmlspecialchars($fila['detalles']) . "</p>";
                $salida .= "<div class='carfav'>";
                $salida .= "<button class='btn btn-primary btn-agregar-carrito' data-id='{$fila['id_producto']}'><i class='fa fa-shopping-cart'></i> carrito</button>-";
                $salida .= "<button class='btn btn-primary btn-favoritos' data-id='{$fila['id_producto']}'><i class='fas fa-heart'></i>favoritos</button>";
                $salida .= "</div><br>";
                $salida .= "</div>";
            }
        } else {
            $salida .= "<div class='no-results'>";
            $salida .= "<h2>No se encontraron productos</h2>";
            $salida .= "<p>Intenta con otro término de búsqueda.</p>";
            $salida .= "</div>";
        }
    
        return $salida; // Se devuelve la salida generada
    }
    
    
    
}
