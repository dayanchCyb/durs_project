<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name_tm;
                break;
            case 'ru':
                return $this->name_ru;
                break;
            case 'en':
                return $this->name_en;
                break;
        }
    }

}
