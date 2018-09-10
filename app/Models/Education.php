<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Education extends Model
{
  protected $table = 'educations';

 	protected $fillable = [
 		'id', 'name'
 	];

 	protected $hidden = [
 		'created_at', 'updated_at'
 	];

 	public function user()
 	{
 		return $this->hasOne(User::class);
 	}
}
