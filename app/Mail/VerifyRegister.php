<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyRegister extends Mailable
{
    use Queueable, SerializesModels;

    protected $username;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->username = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('This is my Test Mail Subject')->render(Inertia::render('Mail/VerifyRegister'));
        return $this->subject('ระบบแจ้งเตือนลงทะเบียนผู้ใช้งานใหม่')
            ->cc(['sunchai@seiwa-pioneer.com', 'chakkarin@seiwa-pioneer.com'])
            ->view('Mail.register')
            ->with([
                'userName' => $this->username->username,
                'hashData' => $this->username->current_hash
            ]);
    }
}
