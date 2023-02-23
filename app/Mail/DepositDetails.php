<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositDetails extends Mailable
{
    use Queueable, SerializesModels;
     public $transactionWallet;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($transactionWallet)
    {
        $this -> transactionWallet = $transactionWallet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('depositmail_details');
    }
}
