<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;


class PersonController extends Controller
{
    public function index(Request $request)
    {
        $hasItems = Person::has('boards')->get();
        $noItems = Person::doesntHave('boards')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('person.index',$param);
    }
}

