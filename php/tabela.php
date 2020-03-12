<?php

    include "connect.php";
    
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
    
        $busca = $link->query("SELECT * FROM cursos");
    
        while ($dado = $busca->fetch_object()){
            echo"<tr>";
            echo "<th class='border border-dark'>$dado->idcurso</th>";
            echo "<th class='border border-dark'>$dado->nome</th>";
            echo "<th class='border border-dark'>$dado->descricao</th>";
            echo "<th class='border border-dark'>$dado->carga</th>";
            echo "<th class='border border-dark'>$dado->totaulas</th>";
            echo "<th class='border border-dark'>$dado->ano</th>";
            echo"</tr>";
        }
    }
    mysqli_close($link);

?>