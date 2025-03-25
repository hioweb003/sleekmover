<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         'post_title' => ['required','string'],
         'post_description' => ['required','string'],
         'featured_image' => ['required','image'],
       ]);
       
            $imagePath = $request->file('featured_image');
          $imageNewName = time().$imagePath->getClientOriginalName();
            $imagePath->move('imageupload', $imageNewName);
       
        
       $posts = Post::create([
           'user_id' => Auth::user()->id,
           'post_title' => $request->post_title,
           'post_slug' => Str::slug($request->post_title),
           'post_description' => $request->post_description,
           'featured_image' => 'imageupload/'.$imageNewName
       ]);

       return redirect()->route('post.index')->with('success', 'Post created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findorfail($id);
        return view('admin.posts.edit')->with('post', $posts);
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
        
        $request->validate([
         'post_title' => ['required','string'],
         'post_description' => ['required','string'],
      
       ]);

           $posts = Post::findorfail($id); 

       if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image');
          $imageNewName = time().$imagePath->getClientOriginalName();
            $imagePath->move('imageupload', $imageNewName);
             $posts->featured_image = 'imageupload/'.$imageNewName;
       }
        
           $posts->user_id = Auth::user()->id;
           $posts->post_title = $request->post_title;
           $posts->post_slug = Str::slug($request->post_title);
           $posts->post_description = $request->post_description;
          
           $posts->save();
       return redirect()->route('post.index')->with('success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findorfail($id);
        if (file_exists($posts->featured_image)) {
           unlink($posts->featured_image);
        }
        $posts->delete();
        Comment::where('post_id',$posts->id)->delete();
         return redirect()->route('post.index')->with('success', 'Post Deleted Successfully');
    }
    
  public function addcateg(Request $request){
      
    $request->validate([
            'cate_name' => 'required', 
        ]);
        // Category::create([
        //   'cate_name' => $request->cate_name,
        // ]);
       
        return redirect()->back();
  }
}
