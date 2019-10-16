<?php

namespace Topic\Result\Model;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $table = 'account';

    protected $fillable = ['account_username', 'account_pass', 'account_role', 
                            'account_name', 'account_email'];
}
