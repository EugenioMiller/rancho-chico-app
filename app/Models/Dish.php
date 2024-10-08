<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function details(){
        return $this->hasMany(Detail::class, 'fk_dish', 'id_dish');
    }
}
