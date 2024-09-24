<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function dish() {
        //Primer parámetro -> nombre de la FK
        //Segundo parámetro -> nombre de la PK
        return $this->hasOne(User::class, 'fk_category', 'id_category');
    }
}
