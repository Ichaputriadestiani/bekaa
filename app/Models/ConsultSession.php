<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultSession extends Model
{
    use HasFactory;

    protected $appends = ['mentor'];

    public function getMentorAttribute()
    {
        $mentor = \App\Models\User::find($this->mentor_id);
        return $mentor->name;
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
