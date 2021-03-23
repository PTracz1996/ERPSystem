<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'company_name',
        'email',
        'phone_number',
        'street',
        'city',
        'post_code',
        'house_number',
        'apartment_number',
    ];
}
