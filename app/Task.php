<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function user()
    {
    //Creating Eloquent Relationships for one-to-many relationships between user and tasks
    	return $this->belongsTo(User::class);
    	
    }

}
