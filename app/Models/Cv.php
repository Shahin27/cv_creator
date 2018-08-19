<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
   
    protected $fillable = ['name','position','about','email','contact','address','photo'];

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
					'position'=> 'required|max:100',
					'about'=> 'required|max:500',
					'email'=> 'required|string|email|max:255',
					'contact'=> 'required|max:16|min:4',
					'address'=> 'required|max:255',
				];
			}
			default:break;
		}
	}
}
