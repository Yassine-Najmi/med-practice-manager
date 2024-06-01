<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessHour extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'off' => 'boolean',
    ];

    public function getTimesPeriodAttribute()
    {
        $times = CarbonInterval::minutes($this->step)->toPeriod($this->from, $this->to)->toArray();
        return array_map(function ($time) {
            // dd(ucfirst(today()->isoFormat('dddd')), !$time->isPast());

            if ($this->day == ucfirst(today()->isoFormat('dddd')) && !$time->isPast()) {

                return $time->format('H:i');
            }
            if ($this->day != ucfirst(today()->isoFormat('dddd'))) {

                return $time->format('H:i');
            }
        }, $times);
    }
}
