<?php
declare(strict_types=1);

/**
 * Пешка
 */
class Pawn extends AbstractPiece implements PromotableInterface
{
    /** Показывает, что пешка еще не двигалась и может сходить на 2 клетки */
    public bool $isMoved = false;

    public function move(string $newX, int $newY)
    {
        /** Пешка ходит вперед, может ходить на 2 клетки */
    }

    public function kill(string $newX, int $newY): AbstractPiece
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