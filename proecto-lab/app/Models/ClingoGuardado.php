<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClingoGuardado extends Model
{
    protected $table = 'clingoguardado';
    protected $fillable = ['id_clingo', 'contenido', 'CLINGOGuardado'];

}
