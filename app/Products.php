<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable=['title', 'brand',
        'category',
        'status',
        'featured',
        'pf1',
        'pt1',
        'price',
        'sp',
        'pf2',
        'pt2',
        'img',
        'url',
        'keyword',
        'seodes'];
}
