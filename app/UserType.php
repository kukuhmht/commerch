<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_type';
    protected $primaryKey = 'user_type_id';

    public $timestamps = true;

    protected $fillable = [
        'user_type_id', 'user_type'
    ];

    public function user() {
    	return $this->hasMany('App\Users', 'user_type_id');
    }
}
