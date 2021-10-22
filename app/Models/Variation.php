<?php

namespace App\Models;

use App\Http\Controllers\VariationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'type_id',
        'option_id',
        'price'
    ];
    public function types()
    {
        return $this->belongsTo(Type::class);
    }
    public function options()
    {
        return $this->belongsTo(Option::class);
    }
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
