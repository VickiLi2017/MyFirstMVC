<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded=array();
    public function scopeIncomplete($query){
        //return $query->where('completed',0);
        return $this->belongsTo(Task::class);
    }

    public function user(){
        return $this->belongsTo((User::class));
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {
        $this->comments()->Create(compact('body'));
    }

}




