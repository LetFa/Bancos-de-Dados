<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM lista';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem do Material </title>
    <link rel="stylesheet" href="lista.css">
    <style>
        tr {
            background-color: #bbb;
        }
        div#livro img {
            position: absolute;
            left: 900px;
            top: 20px;
        }
    </style>
</head>
<body>

    <h1 align="center">Listagem do Material</h1><br>
    <div id="livro">
    <img src="https://img.icons8.com/fluency/48/undefined/books.png"/>
    </div>
    <table align="center" border="1" width="700">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Objeto</th>
            <th>Nome</th>
            <th>Material</th>
            <th>Marca</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_lista']. "</td>";
                echo "<td><img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' width='150' height='150'/></td>";
                echo "<td><a href='altera_lista.php?id_lista=".$row['id_lista']."'>" .$row['nome']. "</a></td>";
                echo "<td>" .$row['material']. "</td>";
                echo "<td>" .$row['marca']. "</td>";
                echo "<td>" .$row['cidade']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>" .$row['telefone']. "</td>";
                echo "<td>" .$row['email']. "</td>";
                echo "<td><a href='excluir_lista.php?id_lista=".$row['id_lista']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>

</body>
</html>