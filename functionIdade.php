<?php

//CALCULA IDADE DO USUÁRIO
function calcularIdade($data){

    $idade = 0;

    //converte para o formato data
    $data_nascimento = date('Y-m-d', strtotime($data));

       //separa a string transformando em array
       //usa o hifen como parametro para separar a string
       $data = explode("-",$data_nascimento);
       $anoNasc    = $data[0];
       $mesNasc    = $data[1];
       $diaNasc    = $data[2];
    
       $anoAtual   = date("Y");
       $mesAtual   = date("m");
       $diaAtual   = date("d");
    
       $idade      = $anoAtual - $anoNasc; 

       if ($mesAtual < $mesNasc){
           $idade -= 1;

       } 
       elseif ( ($mesAtual == $mesNasc) && ($diaAtual < $diaNasc) ){
           $idade -= 1;
       }
    
    return $idade;
}


$data_nascimento = '2000-08-28';

echo calcularIdade($data_nascimento);
?>
