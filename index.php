<?php
    $productos = [
        [
            'nombre'=> 'tablet',
            'precio'=>200,
            'cantidad'=> 4,
            'disponible'=> true
        ]
        ,
        [
            'nombre'=> 'tv 24',
            'precio'=>300,
            'cantidad'=> 4,
            'disponible'=> true
        ]
        ,
        [
            'nombre'=> 'monitor curvo',
            'precio'=>400,
            'cantidad'=>0,
            'disponible'=> false
        ]
    ];
    //$json = '{"nombre":"jaime pino","precio":17,"disponibilidad":"bucaramanga"}';
    //$data = json_decode(($json));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>udo de json</h1>
    <nav>
        <?php include('includes/enlaces.php') ?>
    </nav>//
    <main>
        <pre class="resultado" >
            <?php
                var_dump($productos);
                $json = json_encode($productos,JSON_UNESCAPED_UNICODE);
            ?>
            <br>
            <?php
                var_dump(($json))
            ?>
            <table class="contenido" >
                <thead>
                    <th>Nombre</th>
                    <th>precio</th>
                    <th>disponibilidad</th>
                    <th>cantidad</th>   
                </thead>
                <tbody>
                        <?php
                        foreach($productos as $j): ?>
                        <tr>
                            <td><?php echo $j['nombre'] ?></td>
                            <td><?php echo $j[ 'precio'] ?></td>
                            <td><?php echo $j[ 'disponible'] ? 'disponible': 'No disponible'; ?></td>
                            <td><?php echo $j[ 'cantidad'] ?></td>

                        </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
        </pre>
    </main>
</body>
</html>