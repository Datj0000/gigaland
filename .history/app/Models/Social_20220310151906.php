<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'user_id';
 	protected $table = 'tbl_social';
 	public function login(){
 		return $this->belongsTo('App\Models\Customer', 'user');
 	}
    use HasFactory;
}
