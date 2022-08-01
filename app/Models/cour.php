<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teacher;

class cour extends Model
{
    protected $table='cours';

    public function teacher()
    {
        return $this->belongsTo(teacher::class,'profId','teacherID');
    }
}
