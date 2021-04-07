<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent Strings</h1>';

        $slice = Str::of('Welcome to the new world!!!')->after('Welcome to the');
        echo $slice.'<br>';

        $slice2 = Str::of('App\Http\Controller')->afterlast('\\');
        echo $slice2.'<br>';

        $string = Str::of('Hello')->append(' world');
        echo $string.'<br>';

        $res = Str::of('LARAVEL 8')->lower();
        echo $res.'<br>';

        $ress = Str::of($res)->upper();
        echo $ress.'<br>';

        $rep = Str::of('Laravel 5')->replace('5','8');
        echo $rep.'<br>';

        $conv = Str::of('this is the title')->title();
        echo $conv.'<br>';

        $slug = Str::of('Laravel 8 framework')->slug('-');
        echo $slug.'<br>';

        $str = Str::of('Laravel 8 Framework')->substr(4);
        echo $str.'<br>';

        $str2 = Str::of('fluent string')->trim('g');
        echo $str2.'<br>';



    }
}
