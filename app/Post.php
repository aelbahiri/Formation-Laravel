<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    
    public function comments(){

        return $this->hasMany('App\Comment');
        
    }


    // Methode 1 : deleting bot object with forein key..
    public static function boot(){
        parent::boot();
        
        //deletting 
        static::deleting(function(Post $post){
            $post->comments()->delete();
            // dd('deleting'); debuge
        });
        
        //restoring
        static::restoring(function(Post $post){
            $post->comments()->delete();
            // dd('deleting'); debuge
        });
    }

    

    //Methode 2: on delete cascade, add contrainte for colum
                // generate new migration 
        
}
