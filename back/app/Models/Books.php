<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'author',
        'publish_date'
    ];

    protected $casts = [
        'name' => 'string',
        'author' => 'string',
        'publish_date' => 'date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
