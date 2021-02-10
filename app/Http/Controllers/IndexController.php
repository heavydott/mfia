<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;
use App\Models\Atest;

class IndexController extends Controller
{
    public function index() {

        /** for test */
//        Atest::create([
//            'name'=>'test3',
//            'atest'=>'dry'
//        ]);

//        $testRel = new TestRelation(['name'=>'testrel2','testrel'=>'testreltest2']);
//        $atestM = Atest::find('6023c24c7a7d000048007823');
//        $testM = Test::find('602287dc9105000018004622');
//        $testM->atests()->attach($atestM);
//        dd($testM->atests);
//        foreach ($testM->atests as $atest) {
//            dd($atest);
//        }
        /** /for test */

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
