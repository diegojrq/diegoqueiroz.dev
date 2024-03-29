<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetencyTranslation extends Model
{
    use HasFactory;

    protected $table = 'competencies_translation';

    protected $primaryKey = 'id';

    protected $fillable = [
        'competency_id',
        'locale',
        'name',
        'description',
    ];

    protected $casts = [
        'competency_id' => 'integer',
        'locale'        => 'string',
        'name'          => 'string',
        'description'   => 'string',        
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
}
