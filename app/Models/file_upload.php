<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file_upload extends Model
{
    use HasFactory;
    protected $table = 'upload_file';

    protected $fillable = [
        'nama',
        'image',
    ];
}