<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderadores extends Model
{
    use HasFactory;

    protected $table = 'moderadores';

    protected $fillable = [
        'nome',
        'email',
        'password',
    ];
}
