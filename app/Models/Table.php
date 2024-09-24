<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'taken',
    ];

    public function order() {
        //Primer parámetro -> nombre de la FK
        //Segundo parámetro -> nombre de la PK
        return $this->hasOne(User::class, 'fk_table', 'id_table');
    }
}
