<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //
    protected $fillable = [
        'title'
    ];

    //
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
