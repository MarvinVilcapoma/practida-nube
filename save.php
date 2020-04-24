<?php

include('database.php');

if (isset($_POST['save_articulo'])) {
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $query = "INSERT INTO articulo(descripcion, precio, stock) VALUES ('$descripcion', '$precio', '$stock')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido.");
  }

  $_SESSION['message'] = 'Articulo guardado correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: main.php');

}

?>
