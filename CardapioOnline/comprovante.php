<?php
$quantidade1 = $_POST['quantidade1'];
$quantidade2 = $_POST['quantidade2'];
$quantidade3 = $_POST['quantidade3'];
$quantidade4 = $_POST['quantidade4'];
$quantidade5 = $_POST['quantidade5'];
$quantidade6 = $_POST['quantidade6'];
$obs = $_POST['obs'];
$valortotal = 0.00;

if(isset($_POST['opcao1'])){
    $valortotal =  8.30 * $quantidade1;
}
if(isset($_POST['opcao2'])){
    $valortotal = 7.00 * $quantidade2;
}
if(isset($_POST['opcao3'])){
    $valortotal = 8.90 * $quantidade3;
}
if(isset($_POST['bebida1'])){
    $valortotal = 6.00 * $quantidade4;
}
if(isset($_POST['bebida2'])){
    $valortotal =5.00 * $quantidade5;
}
if(isset($_POST['bebida3'])){
    $valortotal = 5.50 * $quantidade6;
}

echo 'Pedido realizado com sucesso! <br>';
echo 'Sua conta ficou em R$:',$valortotal ;
echo '<br>Obs: ', $obs;
echo '<br><a href=index.html>Voltar</a>';

?>

