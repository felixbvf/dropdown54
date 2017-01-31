<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

	protected $fillable = [

		'name'
	];
    protected $guarded = ['id'];

    public function positions()
    {
    	return $this->hasMany('App\Position');
    }
}
