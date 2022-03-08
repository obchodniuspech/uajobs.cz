<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewReply extends Mailable
{
    use Queueable, SerializesModels;


        /**
         * The order instance.
         *
         * @var \App\Models\Order
         */
        protected $link;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     public function build()
     {
         return $this->view('emails.orders.shipped')
                     ->with([
                         'orderName' => $this->order->name,
                         'orderPrice' => $this->order->price,
                     ]);

                     return $this->view('emails.orders.shipped')
                     ->attach('/path/to/file');
     }
     * @return $this
     */
    public function build()
    {

        $linkHash = md5($this->order->companyContactEmail.$this->order->ip.env('APP_HASHSALT'));
        $link = "https://uajobs.cz/view-responses/".$this->order->id."/".$linkHash;
        return $this->from('info@uajobs.cz', 'UAjobs.cz')
        ->view('emails.newresponse')->with([
             'responsesLink' => $link,
         ]);


    }
}
