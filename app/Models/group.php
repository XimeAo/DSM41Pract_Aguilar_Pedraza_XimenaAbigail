<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class group extends Model
{
    
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'group',
        ];
        public function students(){
            return $this->hasMany(student::class,'group_id','id');
        }



        
}
