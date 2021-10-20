<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonsController extends Controller
{
    public function home()
    {
        $result = DB::table('pokemons')->get();
        $sort = $result->sortBy('id');
        return view('main.home', ['pokemons' => $sort]);
    }

    public function detail($id)
    {
        $previd = $id - 1;
        $nextid = $id + 1;
        $all = DB::select("SELECT * From pokemons");
        $result = DB::table('pokemons')->get();
        $result1 = DB::table('pokemons')->where('id', '=', $id)->first();
        $evolve = json_decode($result1->evolutions);
        $result2 = DB::table('pokemons')->select('name')->where('id', '=', $previd)->first();
        $result3 = DB::table('pokemons')->select('name')->where('id', '=', $nextid)->first();
        return view('main.detail', ['pokemons' => $result, 'pokemon' => $result1, 'prevname' => $result2, 'nextname' => $result3, 'previd' => $previd, 'nextid' => $nextid, 'evor' => $evolve, 'all' => $all]);
    }

    public function odesc()
    {
        $result = DB::table('pokemons')->get();
        $sort = $result->sortByDesc('id');
        return view('main.home', ['pokemons' => $sort]);
    }

    public function oaz()
    {
        $result = DB::table('pokemons')->get();
        $sort = $result->sortBy('name');
        return view('main.home', ['pokemons' => $sort]);
    }

    public function oza()
    {
        $result = DB::table('pokemons')->get();
        $sort = $result->sortByDesc('name');
        return view('main.home', ['pokemons' => $sort]);
    }

    public function randomize()
    {
        $result = DB::table('pokemons')->inRandomOrder()->get();
        return view('main.home', ['pokemons' => $result]);
    }

    public function progress()
    {
        $result = DB::table('pokemons')->get();
        return view('components.progress', ['pokemons' => $result]);
    }

    public function search(Request $search)
    {
        // $value = $search->cari;
        // $srch = DB::select("SELECT * From pokemons where name Like '%$value%' OR id Like '%$value%'");
        // $result = array_map(function ($val) {
        //     return (array)$val;
        // }, $srch);
        // $name = $search->name;
        // $id = $search->id;
        // $listactivity = DB::all(); // get all activity
        // if ($search != '') {
        //     $activities = DB::table('pokemons')->where('name', $name)
        //         ->orWhere('id', $id)
        //         ->get();
        // }
        $result = DB::table('pokemons')->get();
        $srch = $result->search($search);
        dump($srch);
        return view('main.home', compact('srch'));
    }
}
