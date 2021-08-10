<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudInsert extends Model
{
    protected $table = 'courses_by_admin';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'course_title', 'course_sub_title','course_status', 'sub_description', 'course_description','preview_image','price',
	];
}
