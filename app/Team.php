<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $fillable =[
        'teamName',
    ];

    public function games()
    {
        return $this->hasMany('App\Game');
    }
}
