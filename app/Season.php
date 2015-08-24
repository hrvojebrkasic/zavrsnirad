<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model {

    protected $fillable = [
        'year',
    ];

    public function games()
    {
        return $this->hasMany('App\Game');
    }

    public function leagues()
    {
        return $this->belongsTo('App\League');
    }

    public function round()
    {
        return $this->hasMany('App\Round');
    }
}
