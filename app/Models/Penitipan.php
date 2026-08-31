<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'name',
        'gender',
        'weight',
        'height',
        'age',
        'category_id',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}