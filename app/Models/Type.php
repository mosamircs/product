<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'increment'
    ];
    public function options()
    {
        return $this->hasMany(Option::class);
    }
    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
