<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    protected $fillable =[
        'article_id',
        'file_name',
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
	}

}
