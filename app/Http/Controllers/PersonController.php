<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request){
      $items = DB::table('people')->simplePaginate(5);
      return view('index', ['items'=>$items]);
    }
}