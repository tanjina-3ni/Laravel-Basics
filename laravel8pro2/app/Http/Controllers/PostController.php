<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;

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

    public function addComments($id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is the  third comment";
        $post->comments()->save($comment);
        return "Comment has been posted";
    }

    public function getComments($id)
    {
        $comment = Post::find($id)->comments;
        return $comment;
    }

    public function iLoveYou()
    {
        return '<h1 style="text-align: center;"><i>I Love You!<i><br><img src="https://www.itl.cat/pngfile/big/4-45946_love-couple-wallpaper-for-android-sophisticated-love-hd.jpg" style="width: 300"></h1>';
    }
}
