<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTag extends Model
{

    /** @use HasFactory<\Database\Factories\JobTagFactory> */
    protected $table = 'job_tag';
    use HasFactory;
    protected $fillable = ['job_listing_id', 'tag_id'];
}
