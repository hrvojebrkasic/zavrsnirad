<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $fillable =[
        'league_id',
        'team_name',
    ];

    public function games()
    {
        return $this->hasMany('App\Game');
    }

    public function league()
    {
        return $this->hasOne('App\League', 'id', 'league_id');
    }

//    public function totalGames()
//    {
//        return Team::
//    }
}
