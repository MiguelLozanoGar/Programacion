<?php
$conn = new PDO("mysql:host=localhost;port=3306;dbname=test", "root", "");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];
  $fecha = $_POST['fecha'];
  $imagen = $_POST['imagen'];

  $sql = "INSERT INTO publicaciones (email, titulo, contenido, fecha, imagen) VALUES (:email, :titulo, :contenido, :fecha, :imagen)";
  $statement = $conn->prepare($sql);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':titulo', $titulo);
  $statement->bindValue(':contenido', $contenido);
  $statement->bindValue(':fecha', $fecha);
  $statement->bindValue(':imagen', $imagen);
  $ejecutar = $statement->execute();

  if (!$ejecutar) {
    echo "Error";
  } else {
    echo "Post Publicado";
    
  }
echo "<a href='index.html'>Volver al menú</a>";
}
?>

