<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Movie extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genre'
    ];

    protected $casts = [
        'genre' => 'array'
    ];



}
