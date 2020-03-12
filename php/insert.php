
<?php

    include "connect.php";

    $curso_nome = $_POST['curso_nome'];
    $curso_descricao = $_POST['curso_descricao'];
    $curso_carga = $_POST['curso_carga'];
    $curso_totaulas = $_POST['curso_totaulas'];
    $curso_ano = $_POST['curso_ano'];

    mysqli_query($link, "INSERT INTO cursos (nome, descricao, carga, totaulas, ano)
                VALUES ('$curso_nome', '$curso_descricao', '$curso_carga', '$curso_totaulas', '$curso_ano')");

    header("location: ../index.php");

?>
