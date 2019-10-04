<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Ticket::class)->withTimestamps();
    }
}
