<?php

    include "connect.php";

    $id = $_POST['update_id'];
    $nome = $_POST['update_nome'];
    $descricao = $_POST['update_descricao'];
    $carga = $_POST['update_carga'];
    $totaulas = $_POST['update_totaulas'];
    $ano = $_POST['update_ano'];

    mysqli_query($link, "UPDATE cursos set nome='$nome', descricao='$descricao', carga='$carga', totaulas='$totaulas', ano='$ano'
                where idcurso = '$id'");

    header("location: ../index.php");

?>