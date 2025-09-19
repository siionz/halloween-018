<?php
// salva os nomes em um arquivo de texto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $arquivo = 'participantes.txt';
    
    // Adiciona o nome ao arquivo
    file_put_contents($arquivo, $nome . PHP_EOL, FILE_APPEND | LOCK_EX);
    
    echo "Obrigado por participar, $nome!";
}

// le os nomes que estão salvos no arquivo de texto
if (file_exists('participantes.txt')) {
    $participantes = file('participantes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    $participantes = [];
}

?>