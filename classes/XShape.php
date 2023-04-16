<?php

class Cross
{
    private int $lineQty;
    private int $columnQty;
    private int $horzLinePosition;
    private int $vertLinePosition;

    public function _construct(int $lines = 5)
    {
        $lines = ($lines < 5) ? 5 : $lines; // Mínimo de linhas = 5

        // Padroniza a quantidade de linhas para um número ÍMPAR, senão a renderização ficará desproporcional
        if ($lines % 2 == 0) {
            $lines++;
        }

        $this->lineQty = $lines;
        $this->columnQty = $lines + 2;
        $this->horzLinePosition = ceil($lines * 0.2);
        $this->vertLinePosition = ceil($this->columnQty / 2);

        // Garantir que a linha horizontal da cruz não seja posicionada na primeira linha do desenho
        if ($this->horzLinePosition <= 1) {
            $this->horzLinePosition = 2;
        }
    }

    public function renderShape(): string
    {
        $result = "";

        // Percorrer todas as linhas
        for ($line = 1; $line <= $this->lineQty; $line++) {
            $lineChars = "";

            // Percorrer todas as colunas de cada linha
            for ($column = 1; $column <= $this->columnQty; $column++) {

                // Adicionar o caractere "*" na posição da linha vertical
                if ($column == $this->vertLinePosition) {
                    $lineChars .= "*";
                }
                // Adicionar o caractere "*" na posição da linha horizontal
                else if ($line == $this->horzLinePosition && ($column > 1 && $column < $this->columnQty)) {
                    $lineChars .= "*";
                }
                // Adicionar o caractere "." nas demais posições
                else {
                    $lineChars .= ".";
                }
            }

            // Concatena o resultado parcial com a atual linha preenchida
            $result .= $lineChars."\n";
        }

        return $result;
    }
}
