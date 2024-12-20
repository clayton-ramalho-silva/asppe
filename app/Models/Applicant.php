<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guard = [];

    protected $casts = [
        'vagas_interesse' => 'array',
        'experiencia_profissional' => 'array',
    ];

    protected $dates = [
        'data_nascimento'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserNameAttribute()
    {
        return $this->user->name;
    }
}
