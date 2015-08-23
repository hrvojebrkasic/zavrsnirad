<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model {

    protected $fillable = [
        'year',
    ];

    public function games()
    {
        return $this->hasMany('App\Games');
    }


}
