<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'harga_harian',
        'harga_mingguan',
        'harga_bulanan',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function details()
    {
        return $this->hasMany(
            TransactionDetail::class,
            'pricelist_id'
        );
    }
}