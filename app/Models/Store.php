<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';

    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(Item::class, 'store_id', 'id');
    }
}
