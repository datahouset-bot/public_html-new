<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsale extends Model
{
      use HasFactory;
    protected $fillable = [
        's_no',
        'party',
        'mobile',
        'date',
        'software',
        'remark',
        'amt',
    ];
    public function productsale()
    {
        return $this->belongsTo(User::class);
    }
}
