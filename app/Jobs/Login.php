<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;

class Login extends Job implements SelfHandling
{
    /**
     * @var string
     */
    private $_email;

    /**
     * @var string
     */
    private $_password;

    /**
     * Login constructor.
     * @param string $email
     * @param string $password
     */
    public function __construct($email, $password)
    {
        $this->_email = $email;
        $this->_password = $password;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $credentials = ['email' => $this->_email, 'password' => $this->_password];
        return Auth::attempt($credentials);
    }
}
