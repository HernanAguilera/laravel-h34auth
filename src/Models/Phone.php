<?php namespace H34\Autenticacion\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {

	protected $table = 'phones';


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
                            'type',
							'number'
					];


	public static $rules = [
          'type'            => 'required|in:fijo,celular,fax',
		  'number' 			=> 'required|alpha'
	];


	public function usuarios(){
		return $this->belongsToMany(User::class, 'phone_user', 'phone_id', 'user_id');
	}


	public function getValidationRules(){
		return self::$rules;
	}

}
