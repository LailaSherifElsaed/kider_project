<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassModel extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='classes';
    protected $fillable = [
        'teacherId',
        'className',
        'fromAge',
        'toAge',
        'fromTime',
        'toTime',
        'capacity', // Fixed typo here
        'price', // Add this line
        'active',
        'class_image',
    ];
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacherId');
    }
}



