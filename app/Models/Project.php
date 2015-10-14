<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $_users = null;

    protected $fillable = ['title', 'pressmark', 'type', 'description', 'users'];

	

	public function getUsers(){    
	   	if ( $this->_users == null ){
    		 $this->_users = json_decode($this->users, true);
	   	}
    	return $this->_users;
	}

    public function hasUser($user_id){
    	if ( is_array( $this->getUsers() ) ){
    		return array_key_exists($user_id, $this->getUsers());
    	}
    	return false;

    }
}
