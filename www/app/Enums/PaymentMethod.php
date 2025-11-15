<?php

declare(strict_types = 1);

namespace App\Enums;

enum PaymentMethod: string
{
    case CASH        = 'cash';
    case CARD_CREDIT = 'card_credit';
    case CARD_DEBIT  = 'card_debit';
    case PIX         = 'pix';
    case OTHER       = 'other';
}
