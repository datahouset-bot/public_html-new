<?php

namespace App\Models;
use App\Models\Lead;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Followup extends Model
{
    use HasFactory;

    public function setFollowupRemarkAttribute($value)
    {
        $this->attributes['followup_remark'] = strtoupper($value);
    }

    // public static function getRecordsWithHighestIdForEachLead()
    // {
    //     return self::query()
    //     ->select('f.lead_id', 'f.followup_date', 'f.followup_remark', 'f.id')
    //     ->from(DB::raw('(SELECT lead_id, MAX(id) AS max_id FROM followups GROUP BY lead_id) AS subquery'))
    //     ->join('followups as f', function ($join) {
    //         $join->on('f.lead_id', '=', 'subquery.lead_id')
    //             ->on('f.id', '=', 'subquery.max_id');
    //     });
    

    // }
public static function getRecordsWithHighestIdForEachLead() 
{
    $userName = strtolower(Auth::user()->name);

    $teams = [
        'ankit'   => ['ankit', 'rahul','rahul sen'],
        'rahul'   => ['ankit', 'rahul','rahul sen'],
        'shakshi' => ['shakshi', 'sumit','akansha','reshma'],
        'sumit'   => ['shakshi', 'sumit','akansha','reshma'],
        'ruchi'   => ['ruchi', 'youtube','oprater','pankaj','sonali'],
        'rajesh'  => ['ruchi', 'youtube','oprater','pankaj','sonali'],
    ];

    // Base query: get latest followup per lead
    $query = self::query()
        ->select('f.lead_id', 'f.followup_date', 'f.followup_remark', 'f.id', 'l.lead_executive')
        ->from(DB::raw('(SELECT lead_id, MAX(id) AS max_id FROM followups GROUP BY lead_id) AS subquery'))
        ->join('followups as f', function ($join) {
            $join->on('f.lead_id', '=', 'subquery.lead_id')
                 ->on('f.id', '=', 'subquery.max_id');
        })
        ->join('leads as l', 'l.id', '=', 'f.lead_id');

    // Filter based on logged-in user
    if ($userName !== 'data house') {
        if (isset($teams[$userName])) {
            $query->where(function ($q) use ($teams, $userName) {
                $team = array_map('strtolower', $teams[$userName]);
                $q->whereIn(DB::raw('LOWER(l.lead_executive)'), $team)
                  ->orWhereRaw('LOWER(l.lead_executive) = ?', ['data house']);
            });
        } else {
            $query->where(function ($q) use ($userName) {
                $q->whereRaw('LOWER(l.lead_executive) = ?', [$userName])
                  ->orWhereRaw('LOWER(l.lead_executive) = ?', ['data house']);
            });
        }
    }

    return $query;
}






    public function Lead()
    {
        return $this->belongsTo(Lead::class, 'lead_id', 'id');
    }
}
