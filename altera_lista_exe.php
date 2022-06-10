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

// Check extension
if( in_array($imageFileType,$extensions_arr) ){      
    // Upload file
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

    $id_lista = $_POST['id_lista'];
    $nome = $_POST['nome'];
    $material = $_POST['material'];
    $marca = $_POST['marca'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
        
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";    
	
    if(isset($fotoNome)){
  	$sql = "UPDATE lista SET
            nome='".$nome."',
            material='".$material."',
            marca='".$marca."',
            cidade='".$cidade."',
            estado='".$estado."',
            telefone='".$telefone."',
            email='".$email."',
            foto_blob='".$fotoBlob."',
            foto_nome='".$fotoNome."'
          WHERE id_lista=".$id_lista;            
          }
          else
          {
            $sql = "UPDATE lista SET
                      nome='".$nome."',
                      material='".$material."',
                      marca='".$marca."',
                      cidade='".$cidade."',
                      estado='".$estado."',
                      telefone='".$telefone."',
                      email='".$email."' 
                     WHERE id_lista=".$id_lista;
          }
	    
          $result = mysqli_query($con, $sql);
          if($result)
            echo "Dados alterados com sucesso <br>";
          else
            echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";  
?>
        <a href='index.php'> Voltar</a>