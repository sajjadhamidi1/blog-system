<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'slug',
        'image',
        'body',
        'image_url'
    ]; 

    public function getImageUrlAttribute()
    {
        return Storage::url('articles/' . $this->image);
    }

    public function sluggable(){
        
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];  
        
       
    }
    
    

}
