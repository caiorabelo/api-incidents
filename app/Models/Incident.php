<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = [
        'title',
        'description',
        'criticality_id',
        'type_id',
        'status',
    ];

    public function criticalityName()
    {
        return $this->hasOne(Criticality::class, 'id', 'criticality_id');
    }

    public function typeName()
    {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }
}
