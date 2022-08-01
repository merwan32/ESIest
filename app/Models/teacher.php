<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cour;

class teacher extends Model
{
    protected $table='teachers';

    protected $fillable = [
        'teacherID',
        'nom',
        'prenom',
        'email'
    ];

    public function cour()
    {
        return $this->hasMany(cour::class,'profId','teacherID');
    }
}
