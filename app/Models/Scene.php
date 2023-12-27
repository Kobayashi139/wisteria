<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $table = 'scenes';
    

    protected $fillable = [
        'user_id',
        'title',
        'content',
        ];
        

    public function getPaginateByLimit(int $limit_count =5 )
    {
        //return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
