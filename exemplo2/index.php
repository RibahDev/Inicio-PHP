<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora Simples</title>
</head>
<body>
    <div class="container">
        <h2>Calculadora Simples</h2>
        <form action="process.php" method="post">
            <label for="num1">Número 1:</label><br>
            <input type="number" id="num1" name="num1" required><br><br>
            <label for="num2">Número 2:</label><br>
            <input type="number" id="num2" name="num2" required><br><br>
            <label for="operation">Operação:</label>
            <select name="operation" id="operation" required>
                <option value="addition">Adição</option>
                <option value="subtracion">Subtração</option>
                <option value="multiplication">Multiplicação</option>
                <option value="division">Divisão</option>
            </select><br><br>
            <input type="submit" value="Calcular">
        </form>
    </div>
    
</body>
</html>