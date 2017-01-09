<?php namespace H34\Auth\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {

	protected $table = 'permissions';


	public function getValidationRules(){
        return self::$rules;
	}

    public static function getList(){
        return self::lists('display_name', 'id')->toArray();
    }

}
