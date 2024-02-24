<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'video', 'caption'
    ];
}
