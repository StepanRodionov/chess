<?php

declare(strict_types=1);

interface PromotableInterface
{
    public function promote(): AbstractPiece;
}