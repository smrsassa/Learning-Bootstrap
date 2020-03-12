<?php

    include "connect.php";

    $id = $_POST['delete_id'];

    mysqli_query($link, "DELETE from cursos where idcurso = $id limit 2;");
    header("location: ../index.php");

?>
