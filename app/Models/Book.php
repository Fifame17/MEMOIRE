<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    use HasFactory; // Utilisation du trait HasFactory pour la création de fabriques de modèles

    protected $fillable = ['title', 'author', 'description']; // Colonnes pouvant être remplies massivement

    // Nom de la table associée au modèle (si différente du nom de la classe)
    // protected $table = 'books';




}


