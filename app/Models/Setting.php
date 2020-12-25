<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table = "settings";
	
    protected $fillable = ['title_bn', 'title_en', 'logo', 'favicon', 'email', 'mobile', 'facebook', 'twitter', 'youtube', 'linkedin', 'address'];
}