<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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

            //$request->file('post_image')->storeAs('posts_images', $time . '.' . $extension);    //2255.jpg

            //Storage::disk('public')->save('posts_images', $time . '.' . $extension);

            $path = Storage::disk('local')->put('$time . ' . ' . $extension', $request->file('post_image')->get());

            dd($path);




            $post = new Post();

            $post->title = $postTitle;
            $post->text = $postText;
            $post->image = $time . '.' . $extension;
            $post->user_id = Auth::user()->id;

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

    public function editPost($id){

        $post = Post::find($id);
        return view('admin.editPostForm', ['post' => $post]);

    }

    public function updatePostForm(Request $request){

            $request->validate(
                [

                    'post_title' => 'max:50',
                    'post_text' => 'required',
                    'post_image' => '|image|max:2000'



                ],
                [

                    'post_title' => 'Please type a post title!',
                    'post_text.required' => 'Please type a post text!',
                    'post_image.image' => 'The file that you selected is NOT an image!'
                ]


            );

            if($request->hasFile('post_image')){

                $postTitle = $request->post_title;
                $postText = $request->post_text;

                if ($request->file('post_image')->isValid()) {

                        $time = time();
                        $extension = $request->file('post_image')->extension(); //jpg, png, etc.

                //$request->file('post_image')->storeAs('posts_images', $time . '.' . $extension);    //2255.jpg

                $path = Storage::disk('local')->put('$time . ' . ' . $extension', $request->file('post_image')->get());

                dd($path);

                        $array = ['title' => $postTitle, 'text' => $postText, 'image' => $time . '.' . $extension];

                        Post::where('id', $request->id)->update($array);

                        return redirect()->back()->with('status', 'The post has been successfuly updated!');



                }else{

                    return \redirect()->back()->with('status', 'There was a problem with uploading the image, please try again!');
                }
        }else{

            $postTitle = $request->post_title;
            $postText = $request->post_text;
            // ^ ta 2 reda ne bi trebala tu biti, ali nisam mogao podesiti zagrade

                $array = ['title' => $postTitle, 'text' => $postText];

                Post::where('id', $request->id)->update($array);

                return redirect()->back()->with('status', 'The post has been successfuly updated!');
        }
        
    }
}

