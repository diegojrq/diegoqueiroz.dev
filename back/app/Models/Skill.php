<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name'  => 'string',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
