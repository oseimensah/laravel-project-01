<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    // Article model
    use Notifiable;
    protected $fillable = [
        'title',
        'user_id',
        'body'
    ];

    // return all articles
    public function fetchAll()
    {
        return $this;
    }

    // a many-to-one relation
    public function owner()
    {
        // method to return user of an article
        return $this->belongsTo(User::class, 'user_id');
    }
    // a many to many relation
    // reference Tag::class
    public function tags()
    {
        //returns all tags for the article
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
