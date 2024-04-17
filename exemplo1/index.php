<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exibir Data Atual</title>
</head>
<body>
    <div class="container">
        <h1>Exibir Data Atual</h1>
        <?php
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y');
        echo "<p>A data de hoje é: $date</p>";
        ?>
    </div>
</body>
</html>