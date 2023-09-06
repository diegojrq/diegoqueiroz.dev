<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistorySkill extends Model
{
    use HasFactory;

    protected $table = 'job_history_skills';

    protected $primaryKey = 'id';

    protected $fillable = [
        'job_history_id',
        'skill_id',
    ];

    protected $casts = [
        'user_id'       => 'integer',
        'skill_id'      => 'integer',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function jobHistory()
    {
        return $this->belongsTo(JobHistory::class);
    }
   
}
