<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Iatstuti\Database\Support\NullableFields;


class Customer extends Model
{
    use HasFactory;
    //protected $fillable = ['customer_name','customer_contact','customer_country'];
    protected $guarded = ['customer_status'];
    //use NullableFields;
    public $timestamps = false;
    // protected $nullable = [
    //     'customer_status'
    // ];
}
