<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    /**
     * product has many variations
     */
    public  function  variations()
    {
        return $this->hasMany(Variation::class);
    }

}
