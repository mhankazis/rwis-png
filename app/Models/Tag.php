<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    
    protected $primaryKey = 'tag_id';

    protected $fillable = [
        'tag_id',
        'title',
        'meta_title',
        'slug',
        'content',
        'is_archived',
        'published_at',
    ];
}
