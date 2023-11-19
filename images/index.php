<?php
$productos = array(
    array("id" => 1, "nombre" => "Peto de protección ", "imagen" => "peto.jpg", "descripcion" => "Protección parte dorsal del cuerpo para el deporte de taekwondo, 
    tiene un sensor para la marcación de puntos con certificación internacional.", "precio" => 150),
    array("id" => 2, "nombre" => "Cabezal", "imagen" => "cabezal.png", "descripcion" => "Protector de cabeza para el deporte de taekwondo, tiene un sensor para 
    la marcación de puntos con certificación internacional.", "precio" => 95),
    array("id" => 3, "nombre" => "Bucal", "imagen" => "bucal.png", "descripcion" => "Protector bucal para el deporte de taekwondo y karate-do ", "precio" => 20),
    array("id" => 4, "nombre" => "Doboc", "imagen" => "uniforme.png", "descripcion" => "Uniforme reglamentario para el deporte de taekwondo apto para entrenar 
    y competir nacional e internacional mente.", "precio" => 250),
    array("id" => 5, "nombre" => "Cinturón", "imagen" => "cinturon.png", "descripcion" => "Cinturón de cintura reglamentario se dispone en todos los colores 
    (negro, rojo, azul, verde, amarillo y blanco).", "precio" => 35),

);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mi tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div id="listaProductos">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($productos); $i++) { ?>
                <tr>
                    <td><img src="<?php echo $productos[$i]["imagen"];?>" alt="<?php echo $productos[$i]["descripcion"];?>" style="width: 100px; height: 100px;"></td>
                    <td><?php echo $productos[$i]["nombre"];?></td>
                    <td><?php echo $productos[$i]["descripcion"];?></td>
                    <td>$<?php echo $productos[$i]["precio"];?></td>
                    <td><button class="btn btn-primary" onclick="agregarAlCarrito(<?php echo $productos[$i]['id']; ?>)">Agregar al carrito</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        <h3>Carrito:</h3>
        <div id="carritoItems"></div>
    </div>

<script type="text/javascript">
    let productos = <?php echo json_encode($productos, JSON_PRETTY_PRINT); ?>;
</script>
<script src="script.js"></script>
</body>
</html>