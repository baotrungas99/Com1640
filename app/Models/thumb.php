<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thumb extends Model
{
    public $timestamps = false; //set time to false
	protected $fillable = [
	        'user_id', 'idea_id','thumb_status'
	    ];
	protected $primaryKey = 'thumb_id';
	protected $table = 'tbl_thumb';
}
