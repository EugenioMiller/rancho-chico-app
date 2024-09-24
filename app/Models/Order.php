<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }

    public function details(){
        return $this->hasMany(Detail::class, 'fk_order', 'id_order');
    }
}
