<?php 
    include 'conexion.php';
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $editorial = $_POST['editorial'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $pagina = $_POST['pagina'];
    $fechaedicion = $_POST['fechaedicion'];

    $query = "Insert into libros (CodLib, NomLib, EditLib, AutLib, GenLib, NumPagLib, FecEdicLib) 
    values ('$codigo', '$nombre', '$editorial', '$autor', '$genero', '$pagina', '$fechaedicion')";

    $db = new Conexion();
    $resultado = $db->query($query);

    if($resultado){
        header("Location: book.php");
        echo "Libro ingresado correctamente...";
    }
    else{
        echo "No se pudo ingresar el libro";
    }

?>