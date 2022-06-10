<?php

   include('conexao.php');

   // Upload da foto     
   $fotoNome = $_FILES['foto']['name'];
   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["foto"]["name"]);
   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif");
   $dt_cadastro = date("Y-m-d");
   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){        
       // Upload file
       if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
           $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
       }
   }

    $nome = $_POST['nome'];
    echo '<p>Nome do Usuário: '.$nome;

    $material = $_POST['material'];
    echo '<p>Material: '.$material;
    
    $marca = $_POST['marca'];
    echo '<p>Marca do material: '.$marca;

    $cidade = $_POST['cidade'];
    echo '<p>Cidade: '.$cidade;
    
    $estado = $_POST['estado'];
    echo '<p>Estado: '.$estado;

    $telefone = $_POST['telefone'];
    echo '<p>Telefone: '.$telefone;

    $email= $_POST['email'];
    echo '<p>E-mail: '.$email;

   $sql = " INSERT INTO lista (nome, material, marca,cidade, estado, telefone,email, foto_blob, foto_nome ,dt_cadastro)
    VALUES ('".$nome. "','".$material."','".$marca."','".$cidade."','".$estado."','".$telefone."','".$email."','".$fotoBlob."','".$fotoNome."','".$dt_cadastro."')";
     echo'<br>';
     echo'<br>';
    $result = mysqli_query($con, $sql);
    if($result)
      echo 'Dados inseridos com sucesso';
    else
    echo 'Erro ao inserir no banco de dados: '.mysqli_error($con);
    
        

?>

