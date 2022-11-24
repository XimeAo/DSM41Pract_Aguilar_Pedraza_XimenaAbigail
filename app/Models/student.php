<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'age',
        'group_id',
        'subject_id'
        ];
        public function groups(){
            return $this->belongsTo(group::class,'group_id');
        }
        public function subjects(){
            return $this->belongsTo(subject::class,'subject_id');
        }
        
}
