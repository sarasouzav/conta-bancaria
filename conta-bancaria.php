<?php


$conta = [
    "titular" => "Sara Viana",
    "saldo" => "1_000",
];

$menu = [
    "1" => "1. Consultar saldo atual",
    "2" => "2. Sacar valor",
    "3" => "3. Depositar valor",
    "4" => "4. Sair",
];

echo "***********************\n
Titular: " . $conta["titular"] . "\n \n";

echo "***********************\n
Selecione uma opção: \n" .
    $menu["1"] . "\n" . $menu["2"] . "\n" . $menu["3"] . "\n" . $menu["4"] . "\n";

$numero = 5;

while ($numero != 4){

    $numero = (int) fgets(STDIN);

switch ($numero) {
    case 1:
        echo "\n Saldo atual:" . $conta["saldo"] . "\n";
        echo "\n Digite 4 para sair do programa ou 5 para voltar ao menu . \n";
        $numero = (int) fgets(STDIN);
        break;

    case 2:
        echo "Informe o valor do saque: \n";
        $saque = (float) fgets(STDIN);
        if ($saque > $conta["saldo"]) {

            echo "\n O valor do saque não pode ser maior que o saldo atual. \n";
            echo "\n Digite 4 para sair do programa ou 5 para voltar ao menu . \n";
            $numero = (int) fgets(STDIN); 

        } else {
        
        $valorSaque = $conta["saldo"] - $saque;
        $conta["saldo"] = $valorSaque;
        echo "\n Saque realizado com sucesso. \n";
        echo "\n Digite 4 para sair do programa ou 5 para voltar ao menu . \n";
        $numero = (int) fgets(STDIN); }

        break;

    case 3:
        echo "Informe o valor a ser depositado: \n ";
        $deposito = (float) fgets(STDIN);
        $valorDeposito = $conta["saldo"] + $deposito;
        $conta["saldo"] = $valorDeposito;
        echo "\n Depósito realizado com sucesso! \n ";
        echo "\n Digite 4 para sair do programa ou 5 para voltar ao menu . \n";
        $numero = (int) fgets(STDIN);
      
        break;


    case 4:
        echo "Fim do programa.";
        exit();
}

if ($numero == 5) {
         
    echo "\n\n\n***********************\n
    Titular: " . $conta["titular"] . "\n \n";

    echo "***********************\n
    Selecione uma opção: \n" .
        $menu["1"] . "\n" . $menu["2"] . "\n" . $menu["3"] . "\n" . $menu["4"] . "\n";
}
}




?>