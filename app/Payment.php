<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    

    protected $fillable = ['email', 'amount','status', 'trans_id', 'ref_id'];
}
