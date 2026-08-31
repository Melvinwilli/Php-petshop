<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function penitipans()
    {
        return $this->hasMany(Penitipan::class);
    }
    
    public function pricelists()
    {
    return $this->hasMany(Pricelist::class, 'category_id');
    }
}