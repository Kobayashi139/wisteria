<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scene;
use App\Http\Requests\SceneRequest;
use App\User;

class SceneController extends Controller
{
    public function index(Scene $scene)
    {
        //$this->authorize('view', $scene); //違う
        //$scene = Auth::user()->scenes; //違う
        return view('scenes.index')->with(['scenes' => $scene->getPaginateByLimit()]);//$sceneの中身を戻り値にする 
       
    }
    
    public function show(Scene $scene)
    {
        $this->authorize('view', $scene); 
        return view('scenes.show')->with(['scene' => $scene]);
    }
    
    public function create(Scene $scene)
    {
        return view('scenes.create')->with(['scene' => $scene->get()]);
    }
    
    public function store(Scene $scene, SceneRequest $request)
    {  
        $input = $request['scene'];
        $input += ['user_id' => $request->user()->id]; 
        //$scene->user_id = $request->input('user_id');
        $scene->fill($input)->save();
        return redirect('/');
        
        // $url = url()->previous();
        // $input = $request['scene'];
        // $scene->fill($input)->save(); //前回取得したURLをもう一度表示する
        // return redirect($url);
    }
 
}
