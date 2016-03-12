<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = [
        'name',
        'message',
        'locale',
    ];

    public static function getDefaultShare()
    {
        return self::firstOrNew([
            'name' => 'Friend',
            'message' => "I'm glad you stopped by",
            'locale' => 'en',
        ]);
    }
}
