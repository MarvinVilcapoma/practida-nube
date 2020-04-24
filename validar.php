<?php

    require('database.php');

    $email=$_POST['email'];
    $password=$_POST['password'];


    $sql=mysqli_query("SELECT * FROM empleado WHERE email='$email'");
    if($f=mysql_fetch_array($sql)){
        if($password==$f['$password']){
            header("Location:main.php");
        }else{
            echo '<script>alert("Contraseña incorrecta")</script>';
            echo "<script>location.href='index.php'</script>";
        }
    }else{
        echo '<script>alert("Este usuario no existe)</script>';
        echo "<script>location.href='index.php'</script>";
    }

?>