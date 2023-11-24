<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dish_id',
        'drink_id',
    ];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
