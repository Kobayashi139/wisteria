<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scene;

class SceneController extends Controller
{
    public function index(Scene $scene)
    {
        return view('scene.index')->with(['scenes' => $scenes->git()]); //$sceneの中身を戻り値にする 
    }

    public function create(Request $request){
        return view('scene.create')->with(['name' => $name ,'reviews' => $review->get()]);
    }
}
