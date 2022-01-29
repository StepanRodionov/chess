<?php
declare(strict_types=1);

abstract class AbstractPiece implements PieceInterface
{
    protected string $xCoordinate;

    protected int $yCoordinate;

    public bool $colour;

    public bool $isAlive = true;

    /** Каждая фигура ходит по своему, нет никакого "ходо по умолчанию" */
    abstract public function move(string $newX, int $newY);

    public function kill(string $newX, int $newY): AbstractPiece
    {
        if ($piece = self::getPieceByCoordinates($newX, $newY)) {
            /** Фигуры одного цвета нельзя бить! */
            if ($piece instanceof King) {
                throw new Exception('Нельзя съесть короля!');
            }
            if ($piece->colour !== $this->colour) {
                $this->move($newX, $newY);
                $piece->isAlive = false;
                return $piece;
            }
        }
        throw new Exception(sprintf('Не получается съесть фигуру по координатам %s:%s', $newX, $newY));
    }

    public static function getPieceByCoordinates(string $xCoordinates, int $yCoordinates): ?AbstractPiece
    {
        /**
         * Метод не относится к конкретной фигуре, но позволяет получить фигуру (или null, если ее нет)
         * по переданным в него координатам. Так как получение по координатам делает не конкретная фигура,
         * метод объявлен статическим
         */
    }
}