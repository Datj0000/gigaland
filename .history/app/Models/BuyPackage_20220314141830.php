<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPackage extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_id', 'created_at'
    ];
    protected $primaryKey = 'attendance_id';
 	protected $table = 'tbl_attendance';
    use HasFactory;
}
