<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['unit_id', 'group'];

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit');
    }
}
