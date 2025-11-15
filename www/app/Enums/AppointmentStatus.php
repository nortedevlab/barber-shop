<?php

declare(strict_types = 1);

namespace App\Enums;

enum AppointmentStatus: string
{
    case SCHEDULED = 'scheduled';
    case CONFIRMED = 'confirmed';
    case CANCELED  = 'canceled';
    case FINISHED  = 'finished';
    case NO_SHOW   = 'no_show';
}
