<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Idade</title>
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_GET["nasceu"] ?? 0;
    $ano = $_GET["futuro"] ?? 0;
    ?>
    <main>
        <h1>Caluladora de Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasceu">Indique o ano em que você nasceu</label>
            <input type="number" name="nasceu" id="nasceu" min="1900" max="<?= $atual?>">
            <label for="futuro">Indique um ano no futuro</label>
            <input type="number" name="futuro" id="futuro">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $idade = $ano - $nasc;
        echo "Sua idade em $ano será de $idade "
        ?>
    </section>
</body>
</html>