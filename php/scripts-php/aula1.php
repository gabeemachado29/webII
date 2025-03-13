<?php 
    $nome = "João"; 
    $idade = 25; 
    $saldo = 1500.75; 
    
    echo "<h1>Olá, $nome!</h1>"; 
    echo "Idade: " . $idade . "<br>"; 
    echo "Saldo: R$ " . number_format($saldo, 2, ',', '.'); 
?> 
