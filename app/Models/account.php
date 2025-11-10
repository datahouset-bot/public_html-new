<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    protected $table = 'accounts';

    Protected $fillable =[
        'account_name',
        'account_group',
        'op_balnce',
        'balnce_type',
        'address',
        'city',
        'state',
        'phone',
        'mobile',
        'email',
        'person_name',
        'gst_no'

    ];
    

    public function amc()
    {
        return $this->hasMany(Amc::class, 'cust_name_id', 'id');
    }
}
