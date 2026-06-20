<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $comment
 * @property int $stars
 */

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'comment',
        'stars'
    ];

}
