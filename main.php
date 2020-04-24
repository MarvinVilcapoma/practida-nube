<?php include('header.php'); ?>
<?php require('database.php'); ?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <div class="card card-body">
        <form action="save.php" method="POST">
          <div class="form-group">
          <h3> Agregar articulos </h3>
          <br>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="precio" class="form-control" placeholder="Precio" autofocus>
          </div>
          <div class="form-group">
            <input type="number" name="stock" class="form-control" placeholder="Stock" autofocus>
          </div>
          <input type="submit" name="save_articulo" class="btn btn-success btn-block" value="Guardar articulo">
        </form>
      </div>
    </div>
    <div class="card card-body">
        <h3> Busqueda </h3>
        <br>
        <form action="search.php" method="POST">
       
        <input type="seach" name="descripcion" class="form-control" placeholder="Busqueda por id o descripcion" autofocus>
        <br>
        <input type=submit name="search" class="btn btn-success" value="Buscar">
        </div>
    <div class="col-md-11">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $result_articulo = mysqli_query($conn,"SELECT * FROM articulo");    
          while($row = mysqli_fetch_assoc($result_articulo)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                <i class="fas fa-edit"></i>
              </a>
              <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            
               
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>
