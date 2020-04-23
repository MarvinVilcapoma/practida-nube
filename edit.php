<?php
include("database.php");
$descripcion = '';
$precio= '';
$stock= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM articulo WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $descripcion = $row['descripcion'];
    $precio = $row['precio'];
    $stock = $row['stock'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $descripcion= $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];

  $query = "UPDATE articulo set descripcion = '$descripcion', precio = '$precio' , stock ='$stock' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Articulo Actualizado';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
         <strong>Actualizar Articulos</strong>
        </div>
        <div class="form-group">
          <input name="descripcion" type="text" class="form-control" value="<?php echo $descripcion; ?>" placeholder="Actualizar Descripcion">
        </div>
        <div class="form-group">
          <input name="precio" type="number" class="form-control" value="<?php echo $precio; ?>" placeholder="Actualizar precio">
        </div>
        <div class="form-group">
          <input name="stock" type="number" class="form-control" value="<?php echo $stock; ?>" placeholder="Actualizar stock">
        </div>
        
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
