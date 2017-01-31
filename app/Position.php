<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

	protected $fillable = [
        'unit_id',
		'name'
	];
    protected $guarded = ['id'];

    
    public function position()
    {
    	return $this->belongsTo('App\Position');
    }
}
