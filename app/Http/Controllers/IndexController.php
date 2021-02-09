<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

class IndexController extends Controller
{
    public function index() {

        Test::create([
            'name'=>'test',
            'test'=>true
        ]);

        return response()->json([
            'name' => 'index'
        ]);
    }

    public function newGame() {
        return response()->json([
            'name' => 'new game'
        ]);
    }
}
