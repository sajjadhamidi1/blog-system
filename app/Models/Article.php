<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\models\Comment;
class Article extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable=[
        'title',
        'slug',
        'image',
        'body',
        'image_url'
    ];



    public function sluggable(): array
    {

            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];


    }



    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

}
