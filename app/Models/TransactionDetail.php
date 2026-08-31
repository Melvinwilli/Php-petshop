<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'pet_id',
        'pricelist_id',
        'total',
    ];

    protected $casts = [
        'total' => 'decimal:2',
    ];

    public function transaction()
    {
        return $this->belongsTo(
            TransactionMaster::class,
            'transaction_id'
        );
    }

    public function pet()
    {
        return $this->belongsTo(
            Penitipan::class,
            'pet_id'
        );
    }

    public function pricelist()
    {
        return $this->belongsTo(
            Pricelist::class,
            'pricelist_id'
        );
    }
}