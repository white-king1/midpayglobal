<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RefundDetails extends Mailable
{
    use Queueable, SerializesModels;
      public $refund;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($refund)
    {
        $this-> refund = $refund;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('refundmail_details');
    }
}
