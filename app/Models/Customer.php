<?php

namespace App\Models;

use App\Traits\BaseTrait;
use Illuminate\Database\Eloquent\Model;
//vpx_imports
//crudDone
class Customer extends Model
{
    use BaseTrait;
    protected $table = "customers";
    protected $fillable = [
        'name',
        'mobile_number',
        'whats_app',
        'address',
    ];
    //vpx_attach
}
