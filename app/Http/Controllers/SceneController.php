<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scene;

class SceneController extends Controller
{
    public function index(Scene $scene)
    {
        return $scene->get(); //$sceneの中身を戻り値にする 
    }//
}
