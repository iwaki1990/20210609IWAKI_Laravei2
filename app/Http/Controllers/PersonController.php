<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request){
      $sort = $request->sort;
      $items = Person::orderBy($sort,'asc')->simplePaginate();
      $param = ['items'=>$items, 'sort'=>$sort];
      return view('index',$param);
    }
}