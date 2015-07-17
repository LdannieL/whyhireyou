<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'profiles';

	public function choices(){
        return $this->hasMany('App\Models\Choice');
    }

}
