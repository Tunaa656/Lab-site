<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failed_Jobs extends Model
{
    protected $table = 'failed_jobs';
    protected $fillable = ['id', 'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at'];
}
