<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
