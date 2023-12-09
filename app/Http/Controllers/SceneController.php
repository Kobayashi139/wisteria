<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scene;
use APP\Http\Requests\SceneRequest;

class SceneController extends Controller
{
    public function index(Scene $scene)
    {
        return view('scenes.index')->with(['scenes' => $scene->get()]);//$sceneの中身を戻り値にする 
    }

    public function show(Scene $scene)
    {
        return view('scenes.show')->with(['scene' => $scene]);
    }
    
    public function create(Request $request){
        return view('scenes.create')->with(['name' => $name ,'reviews' => $review->get()]);
    }
}
