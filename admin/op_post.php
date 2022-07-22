<?php

include "conexao.php";


$acao = $_POST['acao'];
$id = $_POST['id'];

$txt_titulo		= $_POST["txt_titulo"];
$txt_conteudo	= $_POST["txt_conteudo"];
$txt_imagem		= $_POST["txt_imagem"];
$txt_ativo		= $_POST["txt_ativo"];
$txt_data       = $_POST["txt_data"];



	
if($acao=="Inserir"){	
    

	
	$sql = $cn->query = "INSERT INTO post ( titulo_post, descricao_post, img_post, data_post, post_ativo) VALUES 
		('$id_categoria','$txt_titulo','$txt_conteudo', '$txt_imagem', '$txt_data','$txt_ativo')";	
	
    //$result = $cmd->fetchAll(PDO::FETCH_CLASS);	
	
	header('location:principal.php?link=5'); 
	
}

if($acao=="Alterar"){
	$sql="UPDATE post SET
		
		titulo_post		='$txt_titulo',
		descricao_post	='$txt_conteudo',		
		img_post 		='$txt_imagem',
		data_post 		= '$txt_data',
		post_ativo 		='$txt_ativo'
		
		WHERE id_post = '$id' ";

 //$result = $cmd->fetchAll(PDO::FETCH_CLASS);	
			
	header('location:principal.php?link=5'); 
}

if ($acao == "Excluir"){

	$sql="DELETE FROM post WHERE id_post= '$id' ";
	header('location:principal.php?link=5');  

}
?>
<?php

include "conexao.php";


$acao = $_POST['acao'];
$id = $_POST['id'];

$txt_titulo		= $_POST["txt_titulo"];
$txt_conteudo	= $_POST["txt_conteudo"];
$txt_imagem		= $_POST["txt_imagem"];
$txt_ativo		= $_POST["txt_ativo"];
$txt_data       = $_POST["txt_data"];



	
if($acao=="Inserir"){	
    

	
	$sql = "INSERT INTO post ( titulo_post, descricao_post, img_post, data_post, post_ativo) VALUES 
		('$id_categoria','$txt_titulo','$txt_conteudo', '$txt_imagem', '$txt_data','$txt_ativo')";	
		
	
	header('location:principal.php?link=5'); 
	
}

if($acao=="Alterar"){
	$sql="UPDATE post SET
		
		titulo_post		='$txt_titulo',
		descricao_post	='$txt_conteudo',		
		img_post 		='$txt_imagem',
		data_post 		= '$txt_data',
		post_ativo 		='$txt_ativo'
		
		WHERE id_post = '$id' ";

	
	
		
	header('location:principal.php?link=5'); 
}

if ($acao == "Excluir"){

	$sql="DELETE FROM post WHERE id_post= '$id' ";
	header('location:principal.php?link=5');  

}
?>
