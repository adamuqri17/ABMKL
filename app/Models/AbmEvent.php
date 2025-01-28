<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbmEvent extends Model
{
    protected $table = 'abmevent';
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_name',
        'banner',
        'event_description',
        'total_participation',
        'event_category',
        'event_status',
        'event_date',
        'event_session',
        'event_start_time',
        'event_end_time',
        'event_location',
        'event_price',
    ];
}
