<?php

include "conexao.php";

$data_entrada = date("Y-m-d H:i:s", strtotime( $_POST["data_entrada"]));
$data_saida = date("Y-m-d H:i:s", strtotime ($_POST["data_saida"]));

$sql = 'insert into Reserva (email, nome, telefone, data_e_horario_entrada, data_e_horario_saida, quantidade_de_adultos, quantidade_de_criancas)
values (
    "'.$_POST['nome'].'",
    "'.$_POST['email'].'",
    "'.$_POST['telefone'].'",
    "'.$data_entrada.'",
    "'.$data_saida.'",
    "'.$_POST['adulto'].'",
    "'.$_POST['criancas'].'"

);';

echo $sql;

$resultado = $conector->query($sql);


if($resultado===TRUE){
   echo "<script language'javascrip' type='text/javascript'>alert('Reserva concluída com sucesso!');
   window.location.href = 'index';</script>";
} else {
    echo "<script language'javascrip' type='text/javascript'>alert('Por favor, preencher os dados corretamente!');
    window.location.href = 'index';</script>";
}



$conector -> close();



?>
