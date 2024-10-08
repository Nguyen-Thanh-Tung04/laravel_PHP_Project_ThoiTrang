<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_color_id',
        'product_size_id',
        'image',
        'quantity'
    ];
    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'product_size_id');
    }
    public function color()
    {
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }
}