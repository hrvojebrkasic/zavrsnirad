<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

    protected $fillable =[
        'round',
        'league_id',
//        'season_id',
        'hometeam_id',
        'awayteam_id',
        'home_score',
        'away_score',
    ];

//    public function seasons()
//    {
//        return $this->belongsTo('App\Season');
//    }

    public function rounds()
    {
        return $this->belongsTo('App\Round');
    }

    public function league()
    {
        return $this->hasOne('App\League', 'id', 'league_id');
    }

    public function homeTeam()
    {
        return $this->hasOne('App\Team', 'id' , 'hometeam_id');
    }

    public function awayTeam()
    {
        return $this->hasOne('App\Team', 'id' , 'awayteam_id');
    }
}
