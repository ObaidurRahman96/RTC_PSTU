<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = ['description', 'file', 'designation', 'project_id', 'user_id', 'status'];


    public function project()
    {
    	return $this->belongsTo(Project::class);
    }
}
