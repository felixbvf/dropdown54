<?php

namespace App;
use App\Events\ProductUpdate;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'category_id'];

    protected $events = [
        'updated' => ProductUpdate::class
    ];

}
