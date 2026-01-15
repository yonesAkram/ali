<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_tags', 'tag_id', 'job_listing_id');
        // return $this->hasMany(Job::class, 'job_tags', 'tag_id', 'job_listing_id');
    }
}
