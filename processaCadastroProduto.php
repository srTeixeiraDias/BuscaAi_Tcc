<?php

//efetua o cadastro do usuario no banco de dados
 require_once("./Dao.php");
 
 
 $db = new Dao();

 $credenciais['titulo'] = $_POST['titulo'];
 $credenciais['preco'] = $_POST['preco'];
 $credenciais['categoria'] = $_POST['categoria'];
 $credenciais['descricao'] = $_POST['descricao'];
 //$credenciais['hora'] = $_POST['hora'];
// $credenciais['datap'] = $_POST['datap'];

 
 if($db->cadastroProdutos($credenciais)){
    $message = "Cadastrado com sucesso";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    header('Location: ./principal.php');
    

 }
 else{

   header("Location: CadastroProduto.php");
}

?>