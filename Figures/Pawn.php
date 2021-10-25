<?php
declare(strict_types=1);

/**
 * Пешка
 */
class Pawn extends AbstractPiece
{
    public bool $isMoved = false;

    public function move(string $newX, string $newY)
    {
        /** Пешка ходит вперед, может ходить на 2 клетки */
    }

    public function kill(string $newX, string $newY): AbstractPiece
    {
        /**
         * Пешка бьет по диагонали, реализация родительского класса с использованием move() нам не подойдет!
         * А еще пешка может брать на проходе, атакуя пустую от фигуры клетку
         */
    }

    public function promote(): AbstractPiece
    {
        /** Пешка может стать любой фигурой кроме короля, если дойдет до конца доски */
    }
}