<?php

//efetua o cadastro do usuario no banco de dados
 require_once("./Dao.php");
 
 
 $dao = new Dao();

 $credenciais['titulo'] = $_POST['titulo'];
 $credenciais['preco'] = $_POST['preco'];
 $credenciais['categoria'] = $_POST['categoria'];
 $credenciais['descricao'] = $_POST['descricao'];
 //$credenciais[date("H.i.s")] = $_POST['hora'];
 //$credenciais[date("Y-m-d")] = $_POST['datap'];

 
 if($dao->cadastroProdutos($credenciais)){
    $message = "Cadastrado com sucesso";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
    header('Location: ./principal.php');
    

 }
 else{

   header("Location: CadastroProduto.php");
}

?>