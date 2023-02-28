<?php
// conexión - PDO
$conn=new PDO("mysql:host=localhost;port=3306;dbname=test","root","");

// mostrar lo haces con consulta normal y lo muestras en una tabla
$consulta = "SELECT * FROM publicaciones;";
$resultado = $conn->query($consulta);
//var_dump($resultado);

//tabla con los datos y bucle con fetch
echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Id</td>";
    echo "<td>email</td>";
    echo "<td>titulo</td>";
    echo "<td>contenido</td>";
    echo "<td>fecha</td>";
    echo "<td>imagen</td>";
    echo "</tr>";
while ($row = $resultado->fetch(PDO::FETCH_OBJ)) {
    echo "<tr>";
    echo "<td>" . $row->id . "</td>";
    echo "<td>" . $row->email . "</td>";
    echo "<td>" . $row->titulo . "</td>";
    echo "<td>" . $row->contenido . "</td>";
    echo "<td>" . $row->fecha . "</td>";
    echo "<td>" . $row->imagen . "</td>";
    echo "</tr>";
}
echo "</table>";

// enlace al menu de inicio
echo "<a href='index.html'>Volver al menú</a>";