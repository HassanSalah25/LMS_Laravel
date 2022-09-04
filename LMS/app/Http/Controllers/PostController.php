<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function postList()
    {
        $posts = Post::all();
//        dd($posts);
        return view('posts.posts-list',
            [
            'posts' => $posts,
        ]);
//        return $posts;
            //"HOLLA POST ";

           // view('posts.posts-list',compact('posts'));
    }
    public function likePost($id)
    {
        $post = Post::find($id);
        $post->like();
        $post->save();

        return redirect()->route('posts.list')->with('message','Post Like successfully!');
    }

    public function unlikePost($id)
    {
        $post = Post::find($id);
        $post->unlike();
        $post->save();

        return redirect()->route('posts.list')->with('message','Post Like undo successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newPost = Post::create([
            'title' => $request->title,
            'description' => $request->description,
//            'user_id' => 1
        ]);

        return redirect('/posts-list/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

//     dd($id);
        //
     //   return $admin = post::find($id);

//        $admin = admin::find($id);//select * from admins where id==$id
//        $admin->name = $request->name;
//        $admin->password = $request->password;
//        $admin->mobile = $request->mobile;
//        $admin->email = $request->email;
//        $admin->save();
//            dd($id);
        return view('posts.show', [
            'id' => $id,
            'post' => Post::find($id),
//            With this, we will have access to a variable called
//        $post inside our view which is the object containing the blog post we want to display.
//

        ]); //returns the view with the post
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('posts.edit', [
            'post' => Post::find($id),
        ]); //returns the edit view with the post
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('/posts-list/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Post::where('id', $id)->delete();

//        return view('/posts-list/show');
//        return 'HOLLA';
        return redirect('/posts-list/');

    }
}
