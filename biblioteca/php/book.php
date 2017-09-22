<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    <h1>Stock de Libros</h1>
    <hr>
    <br>
    <h2>Ingresar nuevo libro</h2>
    <hr>
    
    <form action="addbook.php" method = "POST">
    
        Código: 
        <input type="text" name="codigo" placeholder="código" value="" required>
        
        Nombre: 
        <input type="text" name="nombre" placeholder="nombres" value="" required>
        
        Editorial:
        <input type="text" name="editorial" placeholder="editorial" value="" required><br><br>
        
        Autor: 
        <input type="text" name="autor" placeholder="autor" value="" required>
        
        Género: 
        <input type="text" name="genero" placeholder="genero" value="" required>
        
        Páginas:
        <input type="text" name="paginas" placeholder="número" value="" required>

        Fecha Edición: 
        <input type="text" name="fechaedicion" placeholder="fecha de edición" value="" required><br><br>
        
        <input type="submit" name = "boton_enviar" value="Ingresar">
    </form>

    <hr>
    <br>


    <h2>Listado de libros</h2>
    <hr>
    <table border=1>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Editorial</th>
                <th>Género</th>
                <th>Autor</th>
                <th>Páginas</th>
                <th>Fecha Edición</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>

            <?php
                include 'conexion.php';
                $db = new Conexion();
                $query = "select * from libros";
                $resultado = $db->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>

            <tbody>
                <tr>
                    <td>
                        <center> <?php echo $row['CodLib']; ?> </center>
                    </td>
                    <td>
                        <?php echo $row['NomLib']; ?>
                    </td>
                    <td>
                        <center><?php echo $row['EditLib']; ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['GenLib']; ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['AutLib']; ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['NumPagLib']; ?></center>
                    </td>
                    <td>
                        <center><?php echo $row['FecEdicLib']; ?></center>
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
        <br>
        <a href="/biblioteca/index.php">Ir al inicio</a>   
</body>
</html>