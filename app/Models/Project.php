<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'code', 'user_id', 'designation', 'description', 'file', 'end_date', 'duration_date', 'status', 'start_date', 'source_of_fund'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
