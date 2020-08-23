<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credentials extends Model
{
    protected $fillable = [
        'identification', 'name', 'institutionalMail', 'medellinMail', 'medellinPassword', 'credentialClaimAttempts'
    ];
}