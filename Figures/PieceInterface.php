<?php
declare(strict_types=1);

interface PieceInterface
{
    public function move(string $newX, int $newY);

    public function kill(string $newX, int $newY): AbstractPiece;
}