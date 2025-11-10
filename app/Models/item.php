<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table = 'items';

    public function amc()
    {
        return $this->hasMany(Amc::class, 'amc_product_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function itemGroup()
    {
        return $this->belongsTo(ItemGroup::class);
    }
}
