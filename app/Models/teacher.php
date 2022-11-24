<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teacher extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'age'
        ];
        public function subjects(){
            return $this->hasMany(subject::class,'teacher_id','id');
        }
        
}
