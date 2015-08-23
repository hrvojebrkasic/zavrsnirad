<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    public function articles()
    {
        return $this->belongsTo('App\Article');
	}

}
