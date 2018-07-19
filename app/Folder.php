<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    /**
     * The Course the Folder belongs to.
     */
    public function course() {
        return $this->belongsTo(Course::class);
    }

    /**
     * The Quizzes that belongs to the Folder.
     */
    public function quizzes() {
        return $this->morphMany(Quiz::class, 'quizzable');
    }
}