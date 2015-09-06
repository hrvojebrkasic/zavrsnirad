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
        'user_id',
        'title',
        'content',
    ];

    public static $rules = array(
        'title' => 'required|between:1,255|unique:news',
        'content' => 'required'
    );

    public static $messages = array(
        'title.required' => 'Naslov vijesti je obavezan.',
        'title.between' => 'Naslov mora biti kraći od 255 znakova.',
        'content.required' => 'Tekst vijesti je obavezan.'
    );

    public function medias()
    {
        return $this->hasMany('App\Media');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
