<?php 


function validarCompra($dadosCompras){
    $erros = [];
    if(!$dadosCompras){
        $erros[] = "Não foi recebido nenhum dado para realizar a compra";
    }
    if (!validarNome($dadosCompras['nomeCliente'])){
        $erros[] = "Verifique se seu nome está correto, e se é maior que 2 caracteres";
    }
    if(!validarCPF($dadosCompras['cpfCliente'])){
        $erros[] = "CPF inválido";
    }
    if(!validarCartao($dadosCompras['cartaoCliente'])){
        $erros[] = "Número de cartão inválido ! :(";
    }
    if(!validarDataValidade($dadosCompras['dataValidadeCartao'])){
        $erros[] = "Data de validade incorreta ou vencida";
    }
    if(!validarCVV($dadosCompras['cvvCartao'])){
        $erros[] = "Número de CVV inválido";
    }
    return $erros;
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "head.php"; ?>
<body>
    <?php include "header.php"; ?>

        <main class="container">
            <section class="row">
            <?php $errosValidacao = validarCompra($_POST); ?>
            <?php if(count($errosValidacao) > 0): ?>           
            
            <div class="col-md-12">

                <ul>    
                    <?php foreach($errosValidacao as $erro): ?>
                        <li><?php echo $erro; ?></li>
                    <?php endforeach; ?>
                </ul>
            
            </div>
            <?php else: ?>
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        Olá <?php echo $_POST['nomeCliente']; ?> Parabéns pela sua compra do produto <?php echo $_POST['nomeProduto']; ?>
                    </div>
                </div>
                    <?php endif; ?>
                <div class="col-md-12">
                    <a href="index.php" class = "btn btn-primary">Volta para home !</a>
                </div>
            </section>
        </main>
</body>
</html>