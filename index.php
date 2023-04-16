<?php

    include "./classes/CrossShape.php";
    include "./classes/XShape.php";

    $shapeString = "";
    $defaultShape = isset($_GET["shape"]) ? $_GET["shape"] : "x";
    $defaultLines = isset($_GET["lines"]) ? $_GET["lines"] : 5;
    $defaultView = isset($_GET["view"]) ? $_GET["view"] : "console";
    
    $shapeRenderer = ($defaultShape === "cross") ? new CrossShape($defaultLines) : new XShape($defaultLines);

    $shapeString = $shapeRenderer->renderShape();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/global.css">
    <script src="scripts/index.js" data_shape_string="<?php echo $shapeString; ?>" id="indexScript" defer></script>
    <title>Projeto Freela PHP</title>
</head>

<body>
    <section class="content">
        <h1>Projeto freela-php</h1>

        <form action="index.php" id="patternForm">
            <h2>Qual forma exibir?</h2>
            <label>
                <input type="radio" name="shape" id="patternX" value="x" <?php if ($defaultShape === "x") { echo "checked"; } else { echo ""; } ?> required>
                <span>Forma de X</span>
            </label>

            <label>
                <input type="radio" name="shape" id="patternCross" value="cross" <?php if ($defaultShape === "cross") { echo "checked"; } else { echo ""; } ?> required>
                <span>Forma de cruz</span>
            </label>

            <hr>

            <label id="labelPatternSize">
                <span>Tamanho da forma em linhas (padrão 5)</span>
                <input type="number" name="lines" id="patternSize" value="<?php echo $defaultLines ?>" required>
            </label>

            <hr>

            <h2>Onde exibir?</h2>
            <label>
                <input type="radio" name="view" id="viewConsole" value="console" <?php if ($defaultView === "console") {echo "checked";} else {echo "";} ?> required>
                <span>Exibir no console</span>
            </label>
            <label>
                <input type="radio" name="view" id="viewPage" value="page" <?php if ($defaultView === "page") {echo "checked";} else {echo "";} ?> required>
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