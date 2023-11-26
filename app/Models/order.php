<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'customer_id',
        'name',
        'email',
        'phone',
        'address',
        'province',
        'district',
        'ward',
        'status',
        'created_at',
        'updated_at'
    ];
}
