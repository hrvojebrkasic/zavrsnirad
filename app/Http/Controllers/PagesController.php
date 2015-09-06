<?php namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Mail;

class PagesController extends Controller {

    public function index() {
        return view('pages.index');
    }

    public function article() {
        return view('pages.article');
    }

    public function povijest() {
        return view('pages.povijest');
    }

    public function struka() {
        return view('pages.struka');
    }

    public function uprava() {
        return view('pages.uprava');
    }

    protected function generateTable($league_id)
    {
        $games = Game::where('league_id', $league_id)->get();
        $foo = array();

        foreach($games as $game){

            if(!isset($foo[$game->awayteam_id]['gamesPlayed'])) {
                $foo[$game->awayteam_id]['gamesPlayed'] = 0;
            }
            if(!isset($foo[$game->hometeam_id]['gamesPlayed'])) {
                $foo[$game->hometeam_id]['gamesPlayed'] = 0;
            }

            if(!isset($foo[$game->awayteam_id]['name'])) {
                $foo[$game->awayteam_id]['name'] = $game->awayTeam->team_name;
            }
            if(!isset($foo[$game->hometeam_id]['name'])) {
                $foo[$game->hometeam_id]['name'] = $game->homeTeam->team_name;
            }

            if(!isset($foo[$game->awayteam_id]['won'])) {
                $foo[$game->awayteam_id]['won'] = 0;
            }

            if(!isset($foo[$game->awayteam_id]['lost'])) {
                $foo[$game->awayteam_id]['lost'] = 0;
            }

            if(!isset($foo[$game->hometeam_id]['won'])) {
                $foo[$game->hometeam_id]['won'] = 0;
            }

            if(!isset($foo[$game->hometeam_id]['lost'])) {
                $foo[$game->hometeam_id]['lost'] = 0;
            }

            $score = 0;
            if($game->home_score > $game->away_score) {
                $score = 1;
            }

            if($score) {
                $foo[$game->hometeam_id]['won']++;
                $foo[$game->awayteam_id]['lost']++;
            } else {
                $foo[$game->awayteam_id]['won']++;
                $foo[$game->hometeam_id]['lost']++;
            }


            $foo[$game->awayteam_id]['gamesPlayed']++;
            $foo[$game->hometeam_id]['gamesPlayed']++;
        }

        $foo = new Collection($foo);
        $foo = $foo->sortByDesc('won');

        $ispis = array(
            'foo' => $foo,
            'games' => $games,
        );

        return $ispis;
    }

    public function tablica($league_id = 1) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function juniori($league_id = 2) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function kadeti($league_id = 3) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function kadetkinje($league_id = 4) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function mladi_kadeti($league_id = 5) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function djevojcice12($league_id = 6) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function djecaci12($league_id = 7) {

        $array = $this->generateTable($league_id);
        $tablica = $array['foo'];
        $games = $array['games'];

        $games->sortBy('round');

        return view('pages.tablica', ['foo' => $tablica, 'games' => $games]);
    }

    public function raspored() {
        return view('pages.raspored');
    }

    public function dvorane() {
        return view('pages.dvorane');
    }

    public function treneri() {
        return view('pages.treneri');
    }

    public function email()
    {
        $name = \Input::get('name');
        $email = \Input::get('email');
        $msg = \Input::get('message');
        var_dump($name);
        var_dump($email);
        var_dump($msg);
        Mail::send('emails.welcome', ['name' => $name, 'email' => $email, 'msg' => $msg], function($message)
        {
            $message->to('hrvoje.brkasic@i-ways.hr', 'Hrvoje Brkasic')->subject('Welcome!');
        });
    }
}