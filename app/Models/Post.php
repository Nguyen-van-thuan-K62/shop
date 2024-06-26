<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    const STATUS_DRAFT = 'draft';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_PUBLISHED = 'published';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
