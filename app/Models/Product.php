<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
        'interest_id',
        'image_main',
        'image_second',
        'image_background',
        'features',
        'title_features',
        'subtitle_features',
        'slug',
    ];
   

    public function interest()
    {
        return $this->belongsTo(Interest::class);
    }

    

    public function priceWithoutDecimals()
    {
        return number_format($this->price, 0, '', '.');
    } 

   

}
