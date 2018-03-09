<?php
/**
 * Users Model
 *
 * Service model for the users table
 *
 * @category    app
 * @package     models
 * @copyright   Copyright (c) 2016, Arroyo Labs, http://www.arroyolabs.com
 * @author      John Arroyo, john@arroyolabs.com
 */
namespace app\models;

class Users extends \erdiko\eloquent\Model
{
	protected $table = 'user';

	public function getUsers()
	{
		return Users::all();
	}

	public function getUserByName($name)
	{
		return User::where('name', '=', $name)->firstOrFail();
	}
}