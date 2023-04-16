<?php

    include "./classes/CrossShape.php";
    include "./classes/XShape.php";

    $indexParams = "";
    
    if (isset($_GET["shape"]) && isset($_GET["lines"]) && isset($_GET["view"])) {
        $shapeString = new CrossShape();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/global.css">
    <script src="scripts/index.js<?php echo $indexParams ?>" defer></script>
    <title>Projeto Freela PHP</title>
</head>

<body>
    <section class="content">
        <h1>Projeto freela-php</h1>

        <form action="index.php" id="patternForm">
            <h2>Qual forma exibir?</h2>
            <label>
                <input type="radio" name="shape" id="patternX" value="x" checked required>
                <span>Forma de X</span>
            </label>

            <label>
                <input type="radio" name="shape" id="patternCross" value="cross" required>
                <span>Forma de cruz</span>
            </label>

            <hr>

            <label id="labelPatternSize">
                <span>Tamanho da forma em linhas (padrão 5)</span>
                <input type="number" name="lines" id="patternSize" value="5" required>
            </label>

            <hr>

            <h2>Onde exibir?</h2>
            <label>
                <input type="radio" name="view" id="viewConsole" value="console" checked required>
                <span>Exibir no console do navegador</span>
            </label>
            <label>
                <input type="radio" name="view" id="viewPage" value="page" required>
                <span>Exibir nessa página</span>
            </label>

            <div class="buttons-container">
                <input type="submit" value="Exibir padrão">
            </div>
        </form>
    </section>

    <section id="tableContainer">

    </section>

</body>

</html>