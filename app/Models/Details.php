<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $guarded = [];


     // let create one to one relatioship
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
