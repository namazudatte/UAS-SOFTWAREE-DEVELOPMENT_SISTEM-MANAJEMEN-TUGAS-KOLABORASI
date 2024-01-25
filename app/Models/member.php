<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'nama',
        'email',
        'jabatan',
        'tugas',
    ];
    use HasFactory;
}