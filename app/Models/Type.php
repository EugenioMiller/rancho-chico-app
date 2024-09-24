<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function dish() {
        //Primer parámetro -> nombre de la FK
        //Segundo parámetro -> nombre de la PK
        return $this->hasOne(User::class, 'fk_type', 'id_type');
    }
}
