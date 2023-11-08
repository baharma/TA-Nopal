<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRequest extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'api_requests';

    protected $fillable = [
        'database',
        'device_id',
        'temperature',
        'humidity',
        'light',
        'vent_status',
        'mist_status'
    ];
}
