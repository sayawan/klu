<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model {

    protected $fillable = [
        'course_id',
        'user_id'
    ];
}
