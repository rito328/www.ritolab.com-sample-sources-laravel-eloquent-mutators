<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // protected $dateFormat = 'U'; // 日時フォーマットをUnixTimestampとする

    // protected $dateFormat = 'Y-m-d'; // 日時フォーマットをDATEとする

    protected $dates = [
        'added_on'
    ];

    protected $casts = [
        'added_on' => 'date', // added_onはいつでもDATE型で取得する
    ];

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value); // 頭文字を大文字にする
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value); // 頭文字を大文字にする
    }

    public function getFullNameAttribute()
    {
        // full_name として返す
        return "{$this->first_name} {$this->last_name}";
    }

    public function setFirstNameAttribute($value)
    {
        // 全て小文字でセットする
        $this->attributes['first_name'] = strtolower($value);
    }

    public function setLastNameAttribute($value)
    {
        // 全て小文字でセットする
        $this->attributes['last_name'] = strtolower($value);
    }
}
