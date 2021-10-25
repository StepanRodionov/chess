<?php
declare(strict_types=1);

/**
 *
 */
class King extends AbstractPiece
{
    /** Показывает, что король под шахом */
    public bool $isUnderCheck = false;

    public function move(string $newX, string $newY)
    {
        /** Король ходит как угодно, но только на одну клетку */
    }

    public function castle(string $newX, string $newY, Rook $rook)
    {
        /** Король может совершить рокировку с помощью союзной ладьи */
    }
}