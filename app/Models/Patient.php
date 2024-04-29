<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'id_patients', 'first_name', 'last_name', 'updated_at', 'email', 'deleted_at'
    ];

    // Relation avec le modèle Appointement
    public function appointements()
    {
        return $this->hasMany(Appointement::class, 'id_patient');
    }
}

