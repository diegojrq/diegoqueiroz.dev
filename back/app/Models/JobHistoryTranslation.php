<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistoryTranslation extends Model
{
    use HasFactory;

    protected $table = 'job_history_translation';

    protected $primaryKey = 'id';

    protected $fillable = [
        'job_history_id',
        'locale',
        'job_title',
        'job_description',
    ];

    protected $casts = [
        'job_history_id'    => 'integer',
        'locale'            => 'string',
        'job_title'         => 'string',
        'job_description'   => 'string',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
