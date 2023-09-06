<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkillCompetency extends Model
{
    use HasFactory;

    protected $table = 'user_skill_competency';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'skill_id',
        'competency_id',
    ];

    protected $casts = [
        'user_id'       => 'integer',
        'skill_id'      => 'integer',
        'competency_id' => 'integer',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function competency()
    {
        return $this->belongsTo(Competency::class);
    }
   
}
