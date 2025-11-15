<?php

declare(strict_types = 1);

namespace App\Domain\Tenancy\Models;

use App\Domain\Barbershop\Models\Chair;
use App\Domain\Barbershop\Models\Customer;
use App\Domain\Barbershop\Models\Service;
use App\Domain\Finance\Models\FinancialTransaction;
use App\Domain\Inventory\Models\Product;
use App\Domain\Sales\Models\Sale;
use App\Domain\Scheduling\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'document',
        'email',
        'phone',
        'timezone',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function chairs(): HasMany
    {
        return $this->hasMany(Chair::class);
    }

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    public function financialTransactions(): HasMany
    {
        return $this->hasMany(FinancialTransaction::class);
    }
}
