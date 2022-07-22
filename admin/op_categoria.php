<?php
 include "conexao.php";

 $txt_categoria = $_POST['txt_categoria'];
 $txt_ativo = $_POST['txt_ativo'];
 
 $sql = "INSERT INTO categoria (categoria, cat_ativo) VALUES ('$txt_categoria', '$txt_ativo')";
 $cn->prepare($sql)->execute([$txt_categoria,$txt_ativo]);
 //var_dump ($cn);
 
 //$res = $stmt->execute();
 if($res){
        
    print "<script type='text/javascript'>location.href='lista_categoria.php'</script>";
}
else{
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=principal.php?link=2'> 
    <script type='text/javascript'>window.alert('Cadastro realizado com sucesso!!!')</script> ";   
}
?>
<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucesso!</title>
</head>
<body>
    <h1>Cadastro realizado com sucesso</h1>
    <h2>Clique aqui para listar os dados</h2>   
</body>
</html> -->