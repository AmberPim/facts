<?php

namespace Funsies\Facts\Http\Controllers;



use Funsies\Facts\Models\Fact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FactController extends Controller
{
    public function index(){

        $facts = Fact::all()->random(1);
        return view('facts::fact',compact('facts'));
    }

    public function likes(Request $request){
        $facts = Fact::find($request);

        foreach ($facts as $fact) {
            $fact->likes++;
            $fact->save();
        }
        return view('facts::fact', compact('facts'));
    }
}
