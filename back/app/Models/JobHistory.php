<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;

    protected $table = 'job_history';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'company_name',
        'local',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'user_id'       => 'integer',
        'company_name'  => 'string',
        'local'         => 'string',
        'start_date'    => 'date',
        'end_date'      => 'date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function translations()
    {
        return $this->hasMany(JobHistoryTranslation::class, 'job_history_id', 'id');
    }
    
}
