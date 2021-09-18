<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_ideas extends Model
{
    public $timestamps = false; //set time to false
	protected $fillable = [
	        'category_idea_name', 'category_idea_slug','category_idea_desc'
	    ];
	protected $primaryKey = 'category_id ';
	protected $table = 'tbl_category_ideas';
}
