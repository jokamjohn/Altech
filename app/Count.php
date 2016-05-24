<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $table = 'counts';
    
    protected $fillable = [ 'count', 'name'];

    /**
     * @param $query
     * @param $hours
     * @return mixed
     */
    public function scopeSpanningHours($query, $hours)
    {
        return $query->oldest()->whereDate('created_at','>=', Carbon::today());
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeYesterday($query)
    {
        return $query->oldest()->whereDate('created_at','>=', Carbon::yesterday());
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeLastWeek($query)
    {
        return $query->oldest()->whereDate('created_at','>=', Carbon::now()->subWeek());
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeToday($query)
    {
        return $query->whereDate('created_at', '=', Carbon::today());
    }
}
