<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_ar',    // Arabic address
        'address_en',    // English address
        'address_link',  // Link for the address
        'whatsapp',      // WhatsApp number
        'phone',         // Phone number
        'email',         // Email address
    ];
}
