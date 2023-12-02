<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $table = 'scene';
    protected $attributes = [
            'created_by' => 0,
            'update_by' => 0,
        ];
    
    // use HasFactory;
}
