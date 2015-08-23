<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

    protected $fillable =[
        'homeScore',
        'awayScore',
    ];

    public function seasons()
    {
        return $this->belongsTo('App\Season');
    }

    public function games()
    {
        //relationship type ????
    }
}
