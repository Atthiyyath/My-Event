<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'path',
    ];

    /**
     * Define relationship with the Event
     *
     * @return void
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
