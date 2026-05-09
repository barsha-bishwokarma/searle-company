<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestorQuery extends Model
{
    protected $fillable = [
        'name',
        'organization',
        'postal_address',
        'city',
        'postal_zip',
        'country',
        'email',
        'telephone',
        'fax',
        'url',
        'interest',
        'message',
    ];
}
