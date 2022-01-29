<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $table = 'cvs';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'jobTitle',
        'about',
        'education',
        'experience',
        'projects',
        'courses',
        'languages',
        'portfolio',
        'hobbits',
        'vulWorks',
        'cvphoto',
        'user_id'
    ];

//    #####################  Relations  ########################
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
