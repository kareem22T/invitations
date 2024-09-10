<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inviter extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    // Relations
    public function invitees()
    {
        return $this->hasMany('App\Models\Invitee', 'inviter_id');
    }    
}
