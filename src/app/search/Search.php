<?php

namespace  App\search;

use App\Travel;
use Illuminate\Support\Str;

class Search {


    public static function searchByFromCity(String $fromCity) {
        return collect(Travel::all())->filter(function ($travel) use ($fromCity){
           return Str::startsWith(Str::lower($travel['vilDepart']),Str::lower($fromCity));
        })->all();
    }


}

