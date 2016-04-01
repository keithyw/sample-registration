<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Models\User;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Auth;

class Register extends Job implements SelfHandling
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
     * Register constructor.
     *
     * @param string $email
     * @param string $password
     */
    public function __construct($email, $password)
    {
        $this->_email = $email;
        $this->_password = $password;
    }

    /**
     * Create user and login person
     *
     * @return mixed
     */
    public function handle()
    {
        if ($user = User::create(['email' => $this->_email, 'name' => $this->_email, 'password' => bcrypt($this->_password)])){
            Auth::login($user);
            return $user;
        }
        return false;
    }
}
