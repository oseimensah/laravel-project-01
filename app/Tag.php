<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // a many to many relation
    // reference Tag::class
    public function articles()
    {
        //returns all tags for the article
        return $this->belongsToMany(Article::class);
    }
}
