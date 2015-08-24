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

    public function rounds()
    {
        return $this->belongsTo('App\Round');
    }

    public function homeTeam()
    {
        return $this->hasOne('App\Team', 'home_team_id', 'id');
    }

    public function awayTeam()
    {
        return $this->hasOne('App\Team', 'aways_team_id', 'id');
    }
}
