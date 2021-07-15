<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Course extends Model
{
   protected $fillable = [
    'title',
    'description',
    'content',
    'image',
   ];


   public function user()
   {
    return $this->hasMany(User::class);
   }
}
