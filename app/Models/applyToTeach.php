<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applyToTeach extends Model
{
   

   protected $table = 'course_applications';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'tutor_id', 'course_id', 'cv_name', 'identifications', 'user_brief',
	];


}
