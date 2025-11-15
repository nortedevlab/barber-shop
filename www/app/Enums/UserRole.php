<?php

declare(strict_types=1);

namespace App\Enums;

enum UserRole: string
{
    case ADMIN_TENANT = 'admin_tenant';
    case BARBER = 'barber';
    case MANAGER = 'manager';
}
