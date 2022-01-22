<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminsController extends Controller
{
    //

    public function allPosts()
    {
        $posts = Post::all();
        return view('admin.allPosts', ['posts' => $posts]);
    }


    public function createPostForm()
    {
        return view('admin.createPostForm');
    }

    public function submitPostForm(Request $request)
    {

        $request->validate(
            [

                'post_title' => 'required|max:50',
                'post_text' => 'required|min:50',
                'post_image' => 'required|image|max:2000'



            ],
            [

                'post_title.required' => 'Please type a post title!',
                'post_text.required' => 'Please type a post text!',
                'post_image.image' => 'The file that you selected is NOT an image!'
            ]


        );

        $postTitle = $request->post_title;
        $postText = $request->post_text;

        if ($request->file('post_image')->isValid()) {

            $time = time();
            $extension = $request->file('post_image')->extension(); //jpg, png, etc.

            $request->file('post_image')->storeAs('posts_images', $time . '.' . $extension);    //2255.jpg




            $post = new Post();

            $post->title = $postTitle;
            $post->text = $postText;
            $post->image = $time . '.' . $extension;

            $post->save();

            return redirect()->back()->with('status', 'The post has been successfuly created!');
        } else {

            return \redirect()->back()->with('status', 'There was a problem with uploading the image, please try again!');
        }
    }

    public function deletePost($id){

        $post = Post::find($id);
        $post->delete();

        return \redirect()->back()->with('status', 'Post has been deleted');
    }
}
