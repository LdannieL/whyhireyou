<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model {

	protected $table = 'choices';

	public function statement(){
        return $this->belongsTo('App\Models\Statement');
    }

    public function profile(){
        return $this->belongsTo('App\Models\Profile');
    }
}