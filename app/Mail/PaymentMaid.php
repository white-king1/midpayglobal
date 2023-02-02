<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentMaid extends Mailable
{
    use Queueable, SerializesModels;
     public $placeOrder;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($placeOrder)
    {
        $this-> placeOrder = $placeOrder;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('payment_maid');
    }
}
