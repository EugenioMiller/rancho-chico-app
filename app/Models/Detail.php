<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
    ];

    public function dishes(){
        return $this->belongsTo(Dish::class);
    }

    public function orders(){
        return $this->belongsTo(Order::class);
    }
}
