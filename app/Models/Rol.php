<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function user() {
        //Primer parámetro -> nombre de la FK
        //Segundo parámetro -> nombre de la PK
        return $this->hasOne(User::class, 'fk_rols', 'id_rol');
    }
}
