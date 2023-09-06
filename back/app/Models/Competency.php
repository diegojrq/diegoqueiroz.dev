<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competency extends Model
{
    use HasFactory;

    protected $table = 'competencies';

    protected $primaryKey = 'id';

    protected $fillable = [];

    protected $casts = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function translations()
    {
        return $this->hasMany(CompetencyTranslation::class, 'competency_id', 'id');
    }
    
}
