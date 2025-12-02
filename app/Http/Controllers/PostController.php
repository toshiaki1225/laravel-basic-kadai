<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  // Postモデルを使う宣言
  use App\Models\Post;

  class PostController extends Controller{

    public function index(){

      $posts = DB::table('posts')->get();
      
      return view('posts.index',compact('posts'));

    }

    public function show($id){
      // PostモデルのEloquent ORMを使用
      $post =  Post::find($id);

      return view('posts.show',compact('post'));

    }
  }

?>