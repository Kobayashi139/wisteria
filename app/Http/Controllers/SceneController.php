<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scene;

class SceneController extends Controller
{
    public function index(Scene $scene)
    {
        return view('scenes.index')->with(['scenes' => $scene->get()]); //$sceneの中身を戻り値にする 
    }

    public function show(Scene $scene)
    {
        return view('scenes.show')->with(['scenes' => $scene]);
    }
    
    public function create(Request $request){
        return view('scenes.create')->with(['name' => $name ,'reviews' => $review->get()]);
    }
}
