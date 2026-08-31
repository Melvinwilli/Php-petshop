<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionMaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'member_id',
        'date_start',
        'date_pickup',
        'discount',
        'subtotal',
    ];

    protected $casts = [
        'date_start' => 'date',
        'date_pickup' => 'date',
        'discount' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function member()
    {
        return $this->belongsTo(
            Member::class,
            'member_id'
        );
    }

    public function details()
    {
        return $this->hasMany(
            TransactionDetail::class,
            'transaction_id'
        );
    }
}
