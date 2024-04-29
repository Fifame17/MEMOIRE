<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointement extends Model
{
    protected $fillable = [
        'id_appointements', 'id_patient', 'creation_date', 'updated_at', 'to_doctor', 'status', 'id_administrator', 'deleted_at'
    ];

    // Relation avec le modèle Patient
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }

    // Relation avec le modèle Administrator
    public function administrator()
    {
        return $this->belongsTo(Administrator::class, 'id_administrator');
    }
}

