<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Post extends Model

{

   protected $guarded = [];


   public function user() {

       return $this->belongsTo(User::class, 'user_id');

   }


   public function getImagePathAttribute($image)

   {      

       return ($image ? asset('storage/'.$image) : asset('images/img_forest.jpg') );

   }

   public function like ($id) {
   		$post = Post::table('posts')->where('id', $id)->increment('likes', 1);
   }

}