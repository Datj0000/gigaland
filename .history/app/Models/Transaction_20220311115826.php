<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'customer_email', 'customer_pass','customer_phone','customer_username'
    ];
    protected $primaryKey = 'transaction_id';
 	protected $table = 'tbl_transaction';
    use HasFactory;
}
