<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scene;
use App\Http\Requests\SceneRequest;

class SceneController extends Controller
{
    public function index(Scene $scene)
    {
        return view('scenes.index')->with(['scenes' => $scene->get()]);//$sceneの中身を戻り値にする 
    }
    

    public function show($name, Scene $scene)
    {
        return view('scenes.show')->with(['name' => $name ,'scene' => $scene->get()]);
    }
    
    public function create($name, Request $request){
        return view('scenes.create')->with(['name' => $name ]);
        //>with(['name' => $name ,'reviews' => $review->get()]);
    }
    
    public function store(Scene $scene, SceneRequest $request)
    {  
        $input = $request['scene'];
        $scene->fill($input)->save();
        return redirect('/');
        
        // $url = url()->previous();
        // $input = $request['scene'];
        // $scene->fill($input)->save(); //前回取得したURLをもう一度表示する
        // return redirect($url);
    }
 
}
