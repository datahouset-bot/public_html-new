<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'productname',
        'productcompany',
        'productuse',
        'MRP',
        'saleprice',
        'minsaleprice',
        'customerprice',
        'dealerprice',
        'discription','usertype',
        'arc','t1','t2','t3','t4'
    ];
}
