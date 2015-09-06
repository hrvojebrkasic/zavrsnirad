<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $table='leagues';


    public function teams(){
        return $this->hasMany('App\Team');
    }

    public function games()
    {
        return $this->hasMany('App\Game');
    }
}
