<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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

    public function tablica() {
        return view('pages.tablica');
    }

    public function djevojcice12() {
        return view('pages.djevojcice12');
    }

    public function djecaci12() {
        return view('pages.djecaci12');
    }

    public function kadetkinje() {
        return view('pages.kadetkinje');
    }

    public function mladi_kadeti() {
        return view('pages.mladi_kadeti');
    }

    public function kadeti() {
        return view('pages.kadeti');
    }

    public function juniori() {
        return view('pages.juniori');
    }

    public function raspored() {
        return view('pages.raspored');
    }

    public function dvorane() {
        return view('pages.dvorane');
    }
}
