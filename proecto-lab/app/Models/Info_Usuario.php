<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_Usuario extends Model
{
    protected $table = 'info_usuario';
    protected $fillable = ['idInfo_Usuario', 'Fecha_nacimiento', 'sexo'];
}
