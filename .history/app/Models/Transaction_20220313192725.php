<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'txHash', 'amount', 'tran_form', 'tran_to'
    ];
    protected $primaryKey = 'transaction_id';
 	protected $table = 'tbl_transaction';
    use HasFactory;
    // public function customer(){
    //     return $this->belongsTo(Customer::class, 'customer_id');
    // }
}
