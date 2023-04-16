<?php

class XShape
{
    private int $lineQty;
    private int $columnQty;

    public function __construct($lines = 5)
    {
        $this->lineQty = ($lines < 5) ? 5 : $lines; // Mínimo de 5 linhas
        $this->columnQty = ($lines < 5) ? 5 : $lines;
    }

    public function renderShape(): string
    {
        $result = "";

        // Percorrer todas as linhas
        for ($line = 1; $line <= $this->lineQty; $line++) {
            $lineChars = "";

            // Percorrer todas as colunas de cada linha
            for ($column = 1; $column <= $this->columnQty; $column++) {
                $line1 = $line;                         // Linha que começa da esquerda para a direita
                $line2 = $this->columnQty - $line + 1;  // Linha que começa da direota para a esquerda

                if ($column === $line1 || $column === $line2) {
                    $lineChars .= "*";
                } else {
                    $lineChars .= ".";
                }
            }

            $result .= $lineChars . "\n";
        }

        return $result;
    }
}
