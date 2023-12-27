<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        $pizzas = Pizza::orderBy('name',)->get();
//        $pizzas = Pizza::all();
//        $pizzas = Pizza::latest()->get();
//         get data from a database

        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }

}
