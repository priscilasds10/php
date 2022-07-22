<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>	
<body>
		<div id="box-cadatro">
			<div id="formulario-maior">
				<form id ="frmpost" name="frmpost"  method="post" action="op_post.php" >
					<fieldset>
						<legend> </legend>				
							<label>
								<span> Título do Post</span>	
								 
								<input type = "text" name="txt_titulo" id="txt_titulo" value ="<?php if(isset($txt_titulo)){print($txt_titulo);}  ?>">
							</label>
							
							<label>
								<span>Conteúdo do post</span>
								<textarea  name="txt_conteudo" id="txt_conteudo">  <?php if(isset($txt_conteudo)){print($txt_conteudo);}  ?> </textarea>
							</label>

                            <label>
								<span>Escolha a imagem</span>
								<input type="text" name="txt_imagem" value ="<?php if(isset($txt_imagem)){print($txt_imagem);}  ?>">
							</label>
							<label>
								<span>Data do post</span>
								<input type="text" name="txt_data" id="txt_data" value ="<?php if(isset($txt_data)){print($txt_data);}  ?>" >
							
							</label>
							
							<label>
								<span>ativo</span>
								<input type="text" name="txt_ativo" id="txt_ativo"  value ="<?php if(isset($txt_ativo)){print($txt_ativo);}  ?>"></label>
						
							<input type="hidden" name ="id" value="<?php echo $id; ?>">
							
							<input type="hidden" name ="txt_nome_imagem" value="<?php echo $linha['img_post']; ?>">
							<input type="hidden" name ="acao" value="<?php if ($acao!=""){echo $acao;}else{echo "Inserir";} ?>">		
                            <input type="submit" name="cadastrar" value="cadastrar">
</form>								
					</fieldset>
				</form>				
			</div>		
		</div>		
</body>
</html>