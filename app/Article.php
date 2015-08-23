<?php namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    protected $fillable =[
        'title',
        'content',
    ];

    public function media()
    {
        return $this->hasMany('App\Media');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
