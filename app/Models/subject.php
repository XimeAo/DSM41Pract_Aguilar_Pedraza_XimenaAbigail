<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subject extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'subject',
        'teacher_id'
        ];
        public function teachers(){
            return $this->belongsTo(teacher::class,'teacher_id');
        }

        public function students(){
            return $this->hasMany(student::class,'subject_id','id');
        }
}

