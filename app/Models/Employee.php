<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'basic_salary',
        'petrol_allowance',
        'sale_incentive',
        'amc_incentive',
        'bonus',
        'full_day_amt_deduction',
        'half_day_amt_deduction',
        'leave_days',
        'half_days',
        'leave_dates',
        'remark',
    ];
     public function employee()
    {
        return $this->belongsTo(User::class);
    }
}
