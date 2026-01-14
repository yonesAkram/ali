<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
