<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{


    protected $guarded =[];

     protected $casts = [
        'category_id' => 'array',
        'feature_image'=>'array'
    ];
   
}
