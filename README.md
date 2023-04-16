# freela-php-oop
Prova para seleção Freela PHP 2ª fase.

- https://github.com/wouerner/freela-php

## Uso

- Crie um novo arquivo php (Ex: "teste.php") no diretório onde está a pasta "classes";

- No início do script faça as importaçãoes necessárias e instâncie as nossas classes:

```javascript
<?php
include "./classes/CrossShape.php";
include "./classes/XShape.php";

$xRenderer = new XShape(10);
$crossRenderer = new CrossShape(10);
```

No exemplo acima as classes são instanciadas e recebem a quantidade de linhas para a renderização da formas. O argumento para instanciar a classe não é obrigatório, nesse caso será aplicado um padrão mínimo de 5 linhas.

- Ambas as classes possuem uma função `renderShape()` que retorna uma string representando o desenho da forma, para usar faça:

```javascript
echo "<pre>".$xRenderer->renderShape()."</pre>";
echo "<br><br>";
echo "<pre>".$crossRenderer->renderShape()."</pre>";
```

No exemplo acima, as formas de "cruz" e de "x" serão exibidas no nagevador.