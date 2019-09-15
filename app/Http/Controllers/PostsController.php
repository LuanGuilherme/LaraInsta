<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

   public function __construct()
   {

       $this->middleware('auth');

   }


   public function index(){

       $posts = Post::all();

       return view('posts.list')->with('posts', $posts);

   }


   public function create() {

       return view('posts.create');

   }


   public function store(){

       request()->validate([

           'image_path' => ['required', 'image']  

       ]);      

           $post = Post::create([

               'user_id' => auth()->id(),

               'image_path' => request()->file('image_path')->store('posts', 'public'),

               'description' => request('description'),

               'filter' => request('filter'),

               'likes' => 0

           ])->save();

       return redirect('posts');

   }


   public function coment ($comented) {     

      $concat = request('coment').'<br>'.$comented;

      Post::where('id', request('id'))->update(array('coments' => $concat));

      return redirect('posts');
   }


 public function addLike () {

       Post::where('id', request('id'))->increment('likes', 1);

       return redirect('posts');
  }


  public function removeLike ($likes) {

    if ($likes > 0) {

      Post::where('id', request('id'))->decrement('likes', 1);

    }

      return redirect('posts');

  }
}