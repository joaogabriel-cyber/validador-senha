<?php

echo "=== VALIDADOR DE SENHA ===\n";
echo "Digite sua senha: ";

$senha = trim(fgets(STDIN));

$erros = [];

if (strlen($senha) < 8) {
    $erros[] = "A senha deve ter pelo menos 8 caracteres.";
}

if (!preg_match('/[A-Z]/', $senha)) {
    $erros[] = "A senha deve ter uma letra maiúscula.";
}

if (!preg_match('/[a-z]/', $senha)) {
    $erros[] = "A senha deve ter uma letra minúscula.";
}

if (!preg_match('/[0-9]/', $senha)) {
    $erros[] = "A senha deve ter um número.";
}

if (!preg_match('/[^a-zA-Z0-9]/', $senha)) {
    $erros[] = "A senha deve ter um caractere especial.";
}

echo "\n";

if (empty($erros)) {

    echo "SENHA VALIDA!\n";

} else {

    echo "SENHA INVALIDA!\n\n";

    foreach ($erros as $erro) {
        echo "- $erro\n";
    }
}

?>
