<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de usuarios</h1>
    <hr>
    <br>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Dirección</th>
                <th>Distrito</th>
                <th>Provincia</th>
                <th>Fecha Nacimiento</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <?php
            include 'conexion.php';
            $db = new Conexion();
            $query = "select * from usuarios";
            $resultado = $db->query($query);
            while($row = $resultado->fetch_assoc()){
        ?>

        <tbody>
            <tr>
                <td>
                    <?php echo $row['CodUs']; ?>
                </td>
                <td>
                    <?php echo $row['NomUs']; ?>
                </td>
                <td>
                    <?php echo $row['ApeUs']; ?>
                </td>
                <td>
                    <?php echo $row['DNIUs']; ?>
                </td>
                <td>
                    <?php echo $row['DirUs']; ?>
                </td>
                <td>
                    <?php echo $row['DistUs']; ?>
                </td>
                <td>
                    <?php echo $row['Provincia']; ?>
                </td>
                <td>
                    <?php echo $row['FeNac']; ?>
                </td>
                <td>
                    <a href="#">Modificar</a>
                </td>
                <td>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
        </tbody>

        <?php        
            }
        ?>
    </table>
    <a href="/biblioteca/index.php">Ir al inicio</a>
</body>
</html>