<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends extends Authenticatable
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_name', 'customer_email', 'customer_pass','customer_phone','customer_username','customer_image', 'customer_balance'
    ];
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_customer';
    use HasFactory;
    public function transaction(){
        return $this->hasMany(Transaction::class, 'customer_id');
    }
}
