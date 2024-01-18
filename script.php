<?php
//importa classes
require_once './classes.php';
//Inicia a conexão com o banco
$psa = new Pessoa;

if($_POST["inserir"] === "TRUE"){
   $nome = $_POST["nome"];
   $tel = $_POST["tel"];
   $obs = $_POST["obs"];

   try{
    $psa->addPessoa($nome, $obs, $tel);
   } catch(Exceptio $e) {
    echo "Erro";
   }
   
}


function gerarCardsClientes($dados) {
    foreach ($dados as $cliente) {
        echo '<div class="col">';
        echo '<div class="card shadow-sm">';
        echo '<div class="card-body">';
        echo '<label class="text-uppercase"><strong>Nome do Cliente:</strong></label>';
        echo '<p class="card-text">' . $cliente['nome'] . '</p>';
        echo '<label class="text-uppercase"><strong>Observação:</strong></label>';
        echo '<p class="card-text">' . $cliente['obeservacao'] . '</p>';
        echo '<div class="d-flex justify-content-between align-items-center mt-4">';
        echo '<label class="text-uppercase"><strong>Telefone id:</strong></label>';
        echo '<p class="card-text">' . $cliente['cliente_telefone_id_cliente_telefone'] . '</p>';
        echo '<div class="d-flex justify-content-between align-items-center mt-4">';
        echo '<div class="btn-group">';
        echo '<a type="button" class="btn btn-sm btn-primary" href="#">Editar</a>';
        echo '<a type="button" class="btn btn-sm btn-danger" href="#">Excluir</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>