<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    // use HasFactory;
    protected $table='user_data';
    protected $fillable = [
        'phone_number',
        'data',
        'whatsapp',
        'facebook',
        'tiktok',
        'youtube',
        'twitter',
        'snapchat',
        'telegram',
        'instagram',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
