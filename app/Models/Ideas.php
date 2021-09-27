<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelLike\Traits\Likeable;
class Ideas extends Model
{
    use Likeable;
    public $timestamps = false; //set time to false
	protected $fillable = [
	        'idea_article', 'idea_slug','idea_sum','idea_desc','idea_author','idea_author_email','idea_document','post_as','category_id','created_at'
	    ];
	protected $primaryKey = 'idea_id';
	protected $table = 'tbl_ideas';
}
