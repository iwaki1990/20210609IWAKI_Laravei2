<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->orderBy('age', 'asc')->get();
        return view('index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('people')->offset($page * 3)->limit(3)->get();
        return view('show', ['items' => $items]);
    }
    public function add(Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'age' => $request->age
        ];
        DB::table('people')->insert($param);
        return redirect('/');
    }
}
