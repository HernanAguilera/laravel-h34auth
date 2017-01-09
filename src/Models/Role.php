<?php namespace H34\Auth\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

	protected $table = 'roles';


	public function getValidationRules(){
		return self::$rules;
	}

    public static function getList(){
        return self::lists('display_name', 'id')->toArray();
    }

}
