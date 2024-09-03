<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function getPostCreationDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


}
