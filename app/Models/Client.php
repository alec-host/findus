<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use CoreProc\WalletPlus\Models\Traits\HasWallets;

class Client extends Authenticatable
{
    use HasFactory, Notifiable, HasWallets;

    protected $guard = 'client';

    protected $fillable = [
        'user_type',
        'reg_no',
        'name',
        'email',
        'phone',
        'address',
        'county',
        'town',
        'otp_code',
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
