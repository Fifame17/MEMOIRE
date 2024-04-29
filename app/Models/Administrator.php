<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{

    protected $fillable = [
        'id_administrator', 'first_name', 'last_name', 'updated_at', 'email', 'password', 'status', 'deleted_at'
    ];
}
