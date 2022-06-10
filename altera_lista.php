<?php
   include('conexao.php');
   $id_lista = $_GET['id_lista'];
   $sql = 'SELECT * FROM lista where id_lista='.$id_lista;
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro de Clientes </h1>
    <?php echo "<img class='center' src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"] )."' align='center' width='150' height='150'/>"; ?>  
    <div id="teste">
        <form method="post" action="altera_lista_exe.php" enctype='multipart/form-data'>
            <fieldset>
                <div class="form-item">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $row['nome']?>" placeholder="Digite o nome">
                </div>
                <br>
                <div class="form-item">
                    <label for="material">Material:</label>
                    <input type="text" id="material" name="material" value="<?php echo $row['material']?>" placeholder="Digite novamente o material">
                </div>
                <br>
                <div class="form-item">
                    <label for="marca">Marca:</label>
                    <input type="text" id="marca" name="marca" value="<?php echo $row['marca']?>" placeholder="Digite uma marca">
                </div>
                <br>
                <div class="form-item">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" value="<?php echo $row['cidade']?>" placeholder="Digite a cidade">
                </div>
                <br>
                <div class="form-item">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" value="<?php echo $row['estado']?>" placeholder="Digite o estado">
                </div>
                <br>
                <div class="form-item">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="<?php echo $row['telefone']?>" placeholder="Digite o telefone">
                </div>
                <br>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" value="<?php echo $row['email']?>" placeholder="Digite o email">
                </div>
                <div class="form-item">
                    <input type="file" id="foto" name="foto" accept="image/*" />
                </div>  
                <br>
                <div class="form-item">
                    <input id="btn" type="submit" value="Enviar" >
                    <a href='index.php'><img  src="imagem/seta.png"></a>
                </div>
                <input name="id_lista" type="hidden" value="<?php echo $row['id_lista']?>">
            </fieldset>
        </form>
    </div>
</body>
</html>