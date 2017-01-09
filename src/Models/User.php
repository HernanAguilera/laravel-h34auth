<?php

namespace H34\Autenticacion\Models;

use Illuminate\Auth\Authenticatable;

use Zizaco\Entrust\Traits\EntrustUserTrait;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract,
									   CanResetPasswordContract,
									   AuthorizableContract {

	use Authenticatable, CanResetPassword, Authorizable, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
							'username'
						  , 'email'
						  , 'password'
						  , 'last_login'
						  , 'locked'
						  , 'expired'
						  , 'expired_at'
						  , 'confirmation_token'
						  , 'password_request_at'
						  , 'verified'
						  , 'verified_at'
					];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [
							'password'
						  , 'remember_token'
						  , 'confirmation_token'
						  , 'expired_at'
						  , 'password_request_at'
						  , 'verified_at'
					];


	public static $rules = [
		'username' 			=> 'required',
		'email' 			=> 'required|email|unique:usuarios',
		'password'          => 'required|alpha_dash|min:6',
        'password-repeat'   => 'required|same:password',
	];


	public function getValidationRules(){
		return self::$rules;
	}

    /**
     *  Relaciones
     */
	// public function roles(){
	// 	return $this->belongsToMany('\H34\Auth\Models\Rol', 'rol_usuario', 'usuario_id', 'rol_id');
	// }
    //
	// public function permisos(){
	// 	return $this->belongsToMany('\H34\Auth\Models\Permiso', 'permiso_usuario', 'usuario_id', 'permiso_id');
	// }

	public function profile(){
		return $this->hasOne(Profile::class);
	}

	public function phones(){
		return $this->belongsToMany(Phone::class, 'phone_user', 'user_id'. 'phone_id');
	}


    /**
     *  Querys
     */
	public function findByUsername($username){
		return Usuario::where('username', $username)
						->first();
	}




}
