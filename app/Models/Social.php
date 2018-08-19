<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{ 
	protected $fillable = ['name','link'];

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
					'name'=> 'required|max:100',
					'link'=> 'required|max:255'
				];
				
			}
			default:break;
		}
	}
}
