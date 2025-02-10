<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'name',
        'slogan',
        'description',
        'keywords',
        'owner',
        'address',
        'email',
        'instagram',
        'owner_instagram',
        'whatsapp',
        'gmaps',
        'owner_image',
        'logo_image',
        'hero_image',
        'about_image',
    ];
}
