<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DlvGuardado extends Model
{
    protected $table = 'dlvguardado';
    protected $fillable = ['idDVLGuardado', 'contenido'];
}
