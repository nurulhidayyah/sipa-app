<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PermohonanDitolak extends Mailable
{
    public $tanggapan;

    public function __construct($tanggapan)
    {
        $this->tanggapan = $tanggapan;
    }

    public function build()
    {
        return $this->subject('Permohonan Anda Ditolak')
                    ->view('emails.permohonan_ditolak');
    }
}
