<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Refund extends Model
{
    protected $fillable = [
        'user_id', 'reason', 'status', 'seller_id', 'refund_id','buyer_id','transaction_id',
    ];
    /**
     * Get the transaction that owns the Refund
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'reference', 'reference');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function placeOrder(): BelongsTo
    {
        return $this->belongsTo(PlaceOrder::class,'user_id','buyer_id');
    }
}
