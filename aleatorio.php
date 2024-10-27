<?php date("m/d/Y");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><header>
    <h1>Gerador de Números Aleatórios</h1>
    <header>
    <form action="aleatorio.php" method="post">
    <select name="intervalo" id="intervalo" required>
        <option value="100">De 1 a 100</option>
        <option value="500">De 1 a 500</option>
        <option value="1000">De 1 a 1000</option>
        <option value="10000">De 1 a 10000</option>
        <option value="100000">De 1 a 100000</option>
        <option value="1000000">De 1 a 1000000</option>
    </select>
    <input type="submit" value="intervalo">

<?php
$intervalo = $_POST["intervalo"] ?? null; // Obtemos o valor do POST

if (is_numeric($intervalo) && $intervalo >= 1) {
    $num = rand(1, $intervalo); // Gera um número aleatório entre 1 e o intervalo escolhido
    echo "<h2 style='color: white'>O número sorteado é $num: </h2>"; ; 
} else {
    echo "Erro: o intervalo deve ser um número positivo.";
}
?>
    </form>
</body>
</html>