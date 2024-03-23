<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'slug',
        'body',
    ]; 



    public function sluggable(){
        
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];  
        
       
    }
    
    

}
