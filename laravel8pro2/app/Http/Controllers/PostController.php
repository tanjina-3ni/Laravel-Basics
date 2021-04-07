<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function createPost(Request $req)
    {
        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
        //return back()->with('post-created', 'Post has been added successfully.');
        $posts= Post::orderBy('title','ASC')->get();
        return view('posts',compact('posts'));

    }

    public function getPost()
    {
        $posts= Post::orderBy('title','ASC')->get();
        return view('posts',compact('posts'));
    }

    public function getPostById($id)
    {
        $posts= Post::where('id',$id)->first();
        return view('details',compact('posts'));
    }

    public function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post-deleted', 'Post has been deleted successfully.');
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', compact('post'));
    }

    public function updatePost(Request $req)
    {
        $post = Post::find($req->id);
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
        return back()->with('post_updated','Post has been updated.');
    }
}
