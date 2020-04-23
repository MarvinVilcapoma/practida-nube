<?php

include("database.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM articulo WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Fallido.");
  }

  $_SESSION['message'] = 'Articulo removido satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
