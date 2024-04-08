<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $hidden = [
        'updated_at',
    ];

    protected $fillable = [
        "name",
        "type",
        "email",
        "address",
        "state",
        "postal_code",
        "city",
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
