<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


// ADD implements MustVerifyEmail AFTER AUTHENTICALE BELOW
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'refund_id',
    ];

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new ResetPasswordNotification($token));
    // }

    /**
     * Get all of the products for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registers(): HasOne
    {
        return $this->hasOne(Register::class, 'id', 'name', 'email', 'password')->latest();
    }
    /**
     * Get all of the products for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function yearlysub(): HasMany
    {
        return $this->hasMany(Yearlysub::class)->latest();
    }

    /**
     * Get the wallet associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function transactionwallet(): HasMany
    {
        return $this->hasMany(TransactionWallet::class);
    }

    public function withdraw(): HasMany
    {
        return $this->hasMany(Withdraw::class);
    }

    public function refund(): HasMany
    {
        return $this->hasMany(Refund::class);
    }

    public function placeOrder(): HasMany
    {
        return $this->hasMany(PlaceOrder::class);
    }
}
