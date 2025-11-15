<?php

declare(strict_types = 1);

namespace App\Enums;

enum StockMovementType: string
{
    case IN  = 'in';
    case OUT = 'out';
}
