<?php

echo "Bem-vindo ao Banco\n";

$saldo = 200;

while (true) {
    echo "\nEscolha a opção para continuar!\n";
    echo "1: Consultar saldo atual\n";
    echo "2: Sacar valor\n";
    echo "3: Depositar valor\n";
    echo "4: Sair\n";
    
    $opcao = trim(fgets(STDIN));

    if ($opcao == 4) {
        echo "Saindo... Obrigado por utilizar nossos serviços!\n";
        break;
    }

    if ($opcao == 1) {
        echo "Seu saldo atual é de: R$$saldo\n";
    } elseif ($opcao == 2) {
        echo "Digite o valor que deseja sacar: ";
        $saque = trim(fgets(STDIN));
        if (!is_numeric($saque) || $saque <= 0) {
            echo "Valor inválido.\n";
        } elseif ($saque > $saldo) {
            echo "Saldo insuficiente! Seu saldo é de R$$saldo.\n";
        } else {
            $saldo -= $saque;
            echo "Você sacou R$$saque. Seu novo saldo é R$$saldo.\n";
        }
    } elseif ($opcao == 3) {
        echo "Digite o valor que deseja depositar: ";
        $deposito = trim(fgets(STDIN));
        if (!is_numeric($deposito) || $deposito <= 0) {
            echo "Valor inválido.\n";
        } else {
            $saldo += $deposito;
            echo "Você depositou R$$deposito. Seu novo saldo é R$$saldo.\n";
        }
    } else {
        echo "Opção inválida! Tente novamente.\n";
    }
}
