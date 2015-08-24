<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $table='leagues';

    public function seasons()
    {
        return $this->hasMany('App\Season');
    }

    public function teams(){
        return $this->hasMany('App\Team');
    }
}
