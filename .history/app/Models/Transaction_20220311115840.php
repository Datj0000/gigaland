<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'transaction_money', 'transaction_time'
    ];
    protected $primaryKey = 'transaction_id';
 	protected $table = 'tbl_transaction';
    use HasFactory;
}
