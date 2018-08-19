<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
	protected $fillable = ['institute','type','duration', 'course', 'result'];

     //get validation rules
	public static function rules($method)
	{

		switch($method)
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			case 'PUT':
			case 'PATCH':
			{
				return [
					'institute'=> 'required|max:100',
					'type'=> 'required|max:100',
					'duration'=> 'required|max:100',
					'course'=> 'required|max:100',
					'result'=> 'required|max:50',
				];
				
			}
			default:break;
		}
	}
}
