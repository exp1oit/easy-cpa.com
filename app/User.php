<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;
use App\Jobs\SendEmailResetPasswordUser;
use App\Jobs\SendVerificationEmailUser;

class User extends Authenticatable implements MustVerifyEmail
{ 
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name',  'phone', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        dispatch(new SendEmailResetPasswordUser($this, $token));
    }

    public function sendEmailVerificationNotification()
    {
        dispatch( new SendVerificationEmailUser($this));
    }
}
