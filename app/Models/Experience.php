<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $fillable = ['company_name','position','duration', 'details'];

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
					'company_name'=> 'required|max:100',
					'position'=> 'required|max:100',
					'duration'=> 'required|max:50',
					'details'=> 'required|max:255',
				];
				
			}
			default:break;
		}
	}
}
