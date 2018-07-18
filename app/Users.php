<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    // A01 - Menghapus pemakaian fungsi remember me
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute){
            parent::setAttribute($key, $value);
        }
    }

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    public $timestamps = true;

    protected $fillable = [
        'user_id', 'username', 'password', 'user_type', 'email', 'verified', 'googleID'
    ];

    protected $hidden = [
        'password'
    ];

    public function userType() {
    	return $this->belongsTo('App\UserType', 'user_type_id');
    }
}
