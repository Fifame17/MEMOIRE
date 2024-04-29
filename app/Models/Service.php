<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id_services', 'name', 'updated_at', 'deleted_at'
    ];

    // Relation avec le modèle Doctor
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'id_service');
    }
}
