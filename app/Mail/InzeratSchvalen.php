<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InzeratSchvalen extends Mailable
{
    use Queueable, SerializesModels;

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
     * @return $this
     */
    public function build()
    {

        $linkHash = md5($this->order->companyContactEmail.$this->order->ip.env('APP_HASHSALT'));
        $link = "https://uajobs.cz/contact/".$this->order->id."/";
        $linkEdit = "https://uajobs.cz/contact/".$this->order->id."/".$linkHash;
        $linkResponses = "https://uajobs.cz/view-responses/".$this->order->id."/".$linkHash;
        return $this->from('info@uajobs.cz', 'UAjobs.cz')
        ->view('emails.jobapproved')->with([
             'responsesLink' => $linkResponses,
             'Link' => $link,
             'responsesLinkEdit' => $linkEdit,
             'jobName' => $this->order->positionName,

         ]);


    }
}
