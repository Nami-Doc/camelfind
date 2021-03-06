<?php
namespace Model;
use PotterORM\BaseModel as Base;

class User extends Base
{
	static protected $table = 'users';
	static protected $pk = 'user_id';
	static protected $fields = array('username', 'password', );

    public function getFullname()
    {
        return $this['first_name'] . ' ' . $this['last_name'];
    }
}