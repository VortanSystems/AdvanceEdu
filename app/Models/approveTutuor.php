<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approveTutuor extends Model
{
    
	   protected $table = 'tutors_for_courses';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'course_id', 'tutor_id	','applicationId','tutor_status','number_of_students',
	];

}
