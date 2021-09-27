<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false; //set time to false
	protected $fillable = [
	        'comment_user_name', 'comment_user_email','comment_content','comment_by', 'idea_id', 'created_at', 'updated_at'
	    ];
	protected $primaryKey = 'comment_id  ';
	protected $table = 'tbl_comment';
}
