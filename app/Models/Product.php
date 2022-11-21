<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function brand()
    {
        return $this->belongsTo(Brand::class);
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
    public function getDescription()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->description_tm;
                break;
            case 'ru':
                return $this->description_ru;
                break;
            case 'en':
                return $this->description_en;
                break;
        }
    }
}
