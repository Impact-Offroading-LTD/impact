<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alsofronie\Uuid\UuidModelTrait;

class DiscordVerification extends Model
{
    use HasFactory, UuidModelTrait;

    protected $fillable = [
        'discord_id',
    ];

    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
}
