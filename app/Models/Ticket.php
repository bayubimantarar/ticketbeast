<?php

namespace App\Models;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $guarded = [];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
