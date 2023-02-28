<?php
//conexión - PDO
$conn = new PDO("mysql:host=localhost;port=3306;dbname=test", "root", "");
//insertar : procedimiento almacenado
//prepare

$sql = 'CALL publicaciones(?, ?)';
$stmt = $conn->prepare($sql);

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
//bindParam
$stmt->bindParam(1, $titulo);
$stmt->bindParam(2, $fecha);
//execute
$stmt->execute();
if (!$ejecutar) {
    echo "Error";
  } else {
    echo "Post Publicado";
    
  }
echo "<a href='index.html'>Volver al menú</a>";

