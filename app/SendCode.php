<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sendCode extends Model
{
    public static function sendCode($phone){
        $code = rand(1111,9999);
        $nexmo = app('Nexmo\Client');
        $nexmo -> message()->send([
            'to' => '+94'.(int) $phone,
            'from' =>'Helping Hands',
            'text' => 'Verify code: '.$code,
        ]);
        return $code;
    }
}
