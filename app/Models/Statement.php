<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model {

	protected $table = 'statements';

	public function choices(){
        return $this->hasMany('App\Models\Choice');
    }
}
