<?php

namespace App\Http\Controllers;

use App\Notice;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function getDashboard()
    {

        $posts = Post::all();
        return view('dashboard');


    }

    public function getAccount()
    {

        
        $posts = Post::orderBy('created_at','desc')->get();
        return view('account',['posts' => $posts]);

    }

    public function showNotice()
  {
    $posts = Notice::all();
    $posts = Notice::orderBy('created_at','desc')->get();
    return view('notice',['posts' => $posts]);

  }

    public function postCreatePost(Request $request)
    {

        $this->validate($request, [

            'body' => 'required|max:1000'

        ]);

        $post = new Post();
        $post->body = $request['body'];

        $message = 'There is an error';

       if($request->user()->posts()->save($post))
       {

        $message = 'Post successfully created';

       };
        return redirect()->route('account')->with(['message' => $message]);
    }

    public function postCreateNotice(Request $request)
    {

        $this->validate($request, [

            'body' => 'required|max:1000'

        ]);

        $post = new Notice();
        $post->body = $request['body'];

       

       $request->user()->posts()->save($post);
       
       $message = 'Post successfully created';

        return redirect()->route('notice')->with(['message' => $message]);
    }

    public function getDeletPost($post_id)
    {

        $post = Post::where('id','=',$post_id)->first();
        if(Auth::user() != $post->user)
        {
            return redirect()->back();
        }
       $post->delete();

       // DB::table('post')->where('id','=',$post_id)->delet();
        return redirect()->route('account');

    }
    
}
