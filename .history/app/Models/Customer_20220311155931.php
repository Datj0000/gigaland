<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_name', 'customer_email', 'customer_pass','customer_phone','customer_username'
    ];
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_customer';
    use HasFactory;
    public function movie(){
        return $this->hasMany(Movie::class, 'category_id');
    }
}
