<?php namespace H34\Autenticacion\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'profiles';


	protected $guarded = [];


	public static $rules = [
		  'user_id' 		=> 'required|exits:usuarios,id'
		, 'first_name' 		=> 'alpha'
		, 'last_name'		=> 'alpha'
		// , 'ciudad_id'		=> 'exits:regionalizacion_ciudades,id'
		, 'web'				=> 'url'
		, 'avatar'			=> 'alpha'
	];


	public function usuario(){
		return $this->belongsTo(User::class);
	}

	public function getValidationRules(){
		return self::$rules;
	}

}
