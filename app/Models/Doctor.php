<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'id_doctor', 'first_name', 'last_name', 'updated_at', 'email', 'id_service', 'deleted_at'
    ];

    // Relation avec le modèle Service
    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}
